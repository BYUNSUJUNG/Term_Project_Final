<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;




use App\menu;
use App\store;
use App\customer;
use App\company;
use App\Cart;

use Illuminate\Support\Facades\Input;
use DB;

class BBSController extends Controller
{

	public function redirectToProvider()
    {
        return \Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = \Socialite::driver('github')->user();
        dd($user);
	}
	
   	public function index(Request $request) {
		$menu = Menu::paginate(3);
		return view('bbs.main',compact('menu'));
		//return view('bbs.board',['todos'=>$todos]); // 위에랑 똑같
   }

   	public function locationSample(Request $request) {
		return view('bbs.locationSample');
		//return view('bbs.board',['todos'=>$todos]); // 위에랑 똑같
   }

   	public function content(Request $request) {
		return view('bbs.content');
	}


   	public function sasin(Request $request) {
		$menu = Menu::paginate(3);
		return view('bbs.sasin',compact('menu'));
	}

	public function demo(Request $request) {
		return view('bbs.demo');
	}
	   

   public function menuBurger(Request $request) {
	$menu = DB::table('menus')
	->where('menu_board', 'like', 'Burger%')
	->orderBy('id', 'DESC')
	->paginate(3);
	return view('bbs.menuBurger',compact('menu'));
	//return view('bbs.board',['todos'=>$todos]); // 위에랑 똑같
   }

   public function menuBurgerSearch(Request $request) {

	$search = Input::get('search');

	$menu = DB::table('menus')
	->where('menu_board', 'like', 'Burger%')
	->orderBy('id', 'DESC')
	->paginate(3);

    if($search != "") {
		$menu = DB::table('menus')
		->where('title','LIKE','%'.$search.'%')
		->where('menu_board', 'like', 'Burger%')
		->orderBy('id', 'DESC')
		->paginate(3);
	
    }        
    return view('bbs.menuBurger',compact('menu'))->withMessage('No Details found. Try to search again !');
   }

   public function menuChicken(Request $request) {
	$menu = DB::table('menus')
	->where('menu_board', 'like', 'Chicken%')
	->orderBy('id', 'DESC')
	->paginate(3);
	return view('bbs.menuChicken',compact('menu'));
	
	//return view('bbs.board',['todos'=>$todos]); // 위에랑 똑같
   }

   public function menuChickenSearch(Request $request) {

	$search = Input::get('search');

	$menu = DB::table('menus')
	->where('menu_board', 'like', 'Chicken%')
	->orderBy('id', 'DESC')
	->paginate(3);

    if($search != "") {
		$menu = DB::table('menus')
		->where('title','LIKE','%'.$search.'%')
		->where('menu_board', 'like', 'Chicken%')
		->orderBy('id', 'DESC')
		->paginate(3);
	
    }        
    return view('bbs.menuBurger',compact('menu'))->withMessage('No Details found. Try to search again !');
   }
   
   public function menuSide(Request $request) {

	$menu = DB::table('menus')
	->where('menu_board', 'like', 'Side%')
	->orderBy('id', 'DESC')
	->paginate(3);
	return view('bbs.menuSide',compact('menu'));
	
	//return view('bbs.board',['todos'=>$todos]); // 위에랑 똑같
   }

   public function menuSideSearch(Request $request) {

	$search = Input::get('search');

	$menu = DB::table('menus')
	->where('menu_board', 'like', 'Burger%')
	->orderBy('id', 'DESC')
	->paginate(3);

    if($search != "") {
		$menu = DB::table('menus')
		->where('title','LIKE','%'.$search.'%')
		->where('menu_board', 'like', 'Burger%')
		->orderBy('id', 'DESC')
		->paginate(3);
	
    }        
    return view('bbs.menuBurger',compact('menu'))->withMessage('No Details found. Try to search again !');
   }

   public function menuDrink(Request $request) {

	$menu = DB::table('menus')
	->where('menu_board', 'like', 'Drink%')
	->orderBy('id', 'DESC')
	->paginate(3);
	return view('bbs.menuDrink',compact('menu'));
	
	//return view('bbs.board',['todos'=>$todos]); // 위에랑 똑같
   }

   public function menuDrinkSearch(Request $request) {

	$search = Input::get('search');

	$menu = DB::table('menus')
	->where('menu_board', 'like', 'Burger%')
	->orderBy('id', 'DESC')
	->paginate(3);

    if($search != "") {
		$menu = DB::table('menus')
		->where('title','LIKE','%'.$search.'%')
		->where('menu_board', 'like', 'Burger%')
		->orderBy('id', 'DESC')
		->paginate(3);
	
    }        
    return view('bbs.menuBurger',compact('menu'))->withMessage('No Details found. Try to search again !');
   }

   public function storeNationwideFranchise(Request $request) {

		$store = Store::paginate(3);
		return view('bbs.storeNationwideFranchise',compact('store'));
	}

	public function storeNewFranchise(Request $request) {

		$store = Store::paginate(3);
		return view('bbs.storeNewFranchise',compact('store'));
	}

	public function storeGallery(Request $request) {

		$store = Store::paginate(3);
		return view('bbs.storeGallery',compact('store'));
	}

   public function customerNotices(Request $request) {

	$customer = DB::table('customers')
	->where('customer_board', 'like', 'Notice%')
	->orderBy('id', 'DESC')
	->paginate(3);;
	return view('bbs.customerNotices',compact('customer'));
	}

	public function customerNoticesSearch(Request $request) {

		$search = Input::get('search');
	
		$customer = DB::table('customers')
		->where('customer_board', 'like', 'Notices%')
		->orderBy('id', 'DESC')
		->paginate(3);
	
		if($search != "") {
			$customer = DB::table('customers')
			->where('title','LIKE','%'.$search.'%')
			->where('customer_board', 'like', 'Notice%')
			->orderBy('id', 'DESC')
			->paginate(3);
		
		}        
		return view('bbs.customerNotices',compact('customer'))->withMessage('No Details found. Try to search again !');
	}

	public function customerCounselingService(Request $request) {

		$customer = Customer::paginate(3);
	return view('bbs.customerCounselingService',compact('customer'));
	}


	public function customerAdvertisingSchedule(Request $request) {

		$customer = DB::table('customers')
		->where('customer_board', 'like', 'AdvertisingSchedule%')
		->orderBy('id', 'DESC')
		->paginate(3);;
		return view('bbs.customerAdvertisingSchedule',compact('customer'));
	}

	public function customerAdvertisingScheduleSearch(Request $request) {

		$search = Input::get('search');
	
		$customer = DB::table('customers')
		->where('customer_board', 'like', 'AdvertisingSchedule%')
		->orderBy('id', 'DESC')
		->paginate(3);
	
		if($search != "") {
			$customer = DB::table('customers')
			->where('title','LIKE','%'.$search.'%')
			->where('customer_board', 'like', 'AdvertisingSchedule%')
			->orderBy('id', 'DESC')
			->paginate(3);
		
		}        
		return view('bbs.customerAdvertisingSchedule',compact('customer'))->withMessage('No Details found. Try to search again !');
	}

   public function companyInformation(Request $request) {

	$company = Customer::paginate(3);
	return view('bbs.companyInformation',compact('company'));
	}

	public function companyHistory(Request $request) {

		$company = Customer::paginate(3);
		return view('bbs.companyHistory',compact('company'));
	}

	public function companyLocation(Request $request) {

		$company = Customer::paginate(3);
		return view('bbs.companyLocation',compact('company'));
	}

   public function burger_show($id) {

	$menuId = Menu::find($id);
	
	$menu = DB::table('menus')
	->where('menu_board', 'like', 'Burger%')
	->orderBy('id', 'DESC')
	->paginate(3);

	return view('bbs.menuBurgerView',compact('menuId','menu'));
	
   }
   
   public function chicken_show($id) {

	$menuId = Menu::find($id);
	
	$menu = DB::table('menus')
	->where('menu_board', 'like', 'Chicken%')
	->orderBy('id', 'DESC')
	->paginate(3);

	return view('bbs.menuBurgerView',compact('menuId','menu'));
	
   }

   public function side_show($id) {

	$menuId = Menu::find($id);
	
	$menu = DB::table('menus')
	->where('menu_board', 'like', 'Side%')
	->orderBy('id', 'DESC')
	->paginate(3);

	return view('bbs.menuBurgerView',compact('menuId','menu'));
	
   }

   public function drink_show($id) {

	$menuId = Menu::find($id);
	
	$menu = DB::table('menus')
	->where('menu_board', 'like', 'Drink%')
	->orderBy('id', 'DESC')
	->paginate(3);

	return view('bbs.menuBurgerView',compact('menuId','menu'));
	
   }

   public function storeNationwideFranchise_show($id) {

	$storeId = Store::find($id);
	
	$store = DB::table('stores')
	->where('store_board', 'like', 'NationwideFranchise%')
	->orderBy('id', 'DESC')
	->paginate(3);

	return view('bbs.storeNationwideFranchiseView',compact('storeId','store'));
	
   }

   public function customerNotices_show($id) {

	$customerId = Customer::find($id);
	
	$customer = DB::table('customers')
	->where('customer_board', 'like', 'Notices%')
	->orderBy('id', 'DESC')
	->paginate(3);

	return view('bbs.customerNoticesView',compact('customerId','customer'));
	
   }
  
   public function customerAdvertisingSchedule_show($id) {

	$customerId = Customer::find($id);
	
	$customer = DB::table('customers')
	->where('customer_board', 'like', 'AdvertisingSchedule%')
	->orderBy('id', 'DESC')
	->paginate(3);

	return view('bbs.customerAdvertisingScheduleView',compact('customerId','customer'));
	
   }

   public function menu_create() { //글 쓰기 form

	return view('bbs.menu_write_form');

   }

   public function store_create() { //글 쓰기 form

	return view('bbs.store_write_form');

   }

   public function customer_create() { //글 쓰기 form

	return view('bbs.customer_write_form');

   }

   public function menu_store(Request $request) { //post방식 /글쓰기처리

	$menus = new Menu;

	$menus->menu_board = Input::get('menu_board');
	$menus->writer = Input::get('writer');
	$menus->title = Input::get('title');
	$menus->file = Input::get('file');
	$menus->price = Input::get('price');
	$menus->content = Input::get('content');

	$menus->save();

	return redirect('menuBurger');

   }

   public function store_store(Request $request) { //post방식 /글쓰기처리

	$stores = new Store;

	$stores->customer_board = Input::get('store_board');
	$stores->writer = Input::get('writer');
	$stores->title = Input::get('title');
	$stores->file = Input::get('file');
	$stores->content = Input::get('content');
	$stores->save();

	return redirect('storeNationwideFranchise');

   }

   public function customer_store(Request $request) { //post방식 /글쓰기처리

	$customers = new Customer;

	$customers->customer_board = Input::get('customer_board');
	$customers->writer = Input::get('writer');
	$customers->title = Input::get('title');
	$customers->file = Input::get('file');
	$customers->content = Input::get('content');

	$customers->save();

	return redirect('customerNotices');

   }

   public function menu_edit($id) { //글 수정 form
	
	$menu = Menu::find($id);
	return view('bbs.menu_modify_form',compact('menu'));
   }

   public function customer_edit($id) { //글 수정 form
	
	$customer = Customer::find($id);
	return view('bbs.customer_modify_form',compact('customer'));
   }

   public function menu_update(Request $request, $id) { //post방식 /글수정처리

	
	$menus = Menu::find($id);

	$menus->menu_board = Input::get('menu_board');
	$menus->writer = Input::get('writer');
	$menus->title = Input::get('title');
	$menus->file = Input::get('file');
	$menus->price = Input::get('price');
	$menus->content = Input::get('content');

	$menus->save();

	return redirect('menuBurger');
   }

   public function customer_update(Request $request, $id) { //post방식 /글수정처리

	
	$customers = Customer::find($id);

	$customers->menu_board = Input::get('customer_board');
	$customers->writer = Input::get('writer');
	$customers->title = Input::get('title');
	$customers->file = Input::get('file');
	$customers->content = Input::get('content');

	$customers->save();

	return redirect('customerNotices');
   }

   public function destroy($id) {
	$menu = Menu::find($id);
	$menu->delete();
	return redirect('menuBurger');
   }

   public function shoppingCartBoard(Request $request) {

	$cart = DB::table('carts')
	->orderBy('id', 'DESC')
	->paginate(3);
	return view('bbs.shoppingCartBoard',compact('cart'));
	}
   
	public function shoppingCart($id) { 

		$carts = new Cart;


		$menus = Menu::find($id);

		$carts->menu_board = $menus->menu_board;
		$carts->title = $menus->title;
		$carts->file = $menus->file;
		$carts->price = $menus->price;
		/*$carts->count = $menus->count;*/
	
		$carts->save();
	
		return redirect('shoppingCartBoard');
	
	   }

}
