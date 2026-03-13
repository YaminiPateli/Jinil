<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller {

	public function index() {
		return view('backend.pages.index');
	}

	public function productGrid() {
		return view('backend.pages.product-grid');
	}
	public function productList() {
		return view('backend.pages.product-list');
	}
	public function productEdit() {
		return view('backend.pages.product-edit');
	}
	public function productDetail() {
		return view('backend.pages.product-detail');
	}
	public function productAdd() {
		return view('backend.pages.product-add');
	}
	public function productCart() {
		return view('backend.pages.product-cart');
	}
	public function checkout() {
		return view('backend.pages.checkout');
	}

	public function categoryList() {
		return view('backend.pages.categories-list');
	}
	public function categoryEdit() {
		return view('backend.pages.categories-edit');
	}
	public function categoryAdd() {
		return view('backend.pages.categories-add');
	}

	public function orderList() {
		return view('backend.pages.order-list');
	}
	public function orderDetails() {
		return view('backend.pages.order-details');
	}
	public function orderInvoices() {
		return view('backend.pages.order-invoices');
	}

	public function customers() {
		return view('backend.pages.customers');
	}
	public function customerDetails() {
		return view('backend.pages.customer-detail');
	}


	public function couponList() {
		return view('backend.pages.coupon-list');
	}
	public function couponEdit() {
		return view('backend.pages.coupon-edit');
	}
	public function couponAdd() {
		return view('backend.pages.coupon-add');
	}


	public function inventoryInfo() {
		return view('backend.pages.inventory-info');
	}
	public function purchase() {
		return view('backend.pages.purchase');
	}
	public function supplier() {
		return view('backend.pages.supplier');
	}
	public function returns() {
		return view('backend.pages.returns');
	}
	public function department() {
		return view('backend.pages.department');
	}

	public function invoices() {
		return view('backend.pages.invoices');
	}
	public function expenses() {
		return view('backend.pages.expenses');
	}
	public function salaryslip() {
		return view('backend.pages.salaryslip');
	}

	public function calendar() {
		return view('backend.pages.calendar');
	}
	public function chat() {
		return view('backend.pages.chat');
	}

	public function storeLocator() {
		return view('backend.pages.store-locator');
	}

	public function adminProfile() {
		return view('backend.pages.admin-profile');
	}
	public function purchasePlan() {
		return view('backend.pages.purchase-plan');
	}
	public function charts() {
		return view('backend.pages.charts');
	}
	public function table() {
		return view('backend.pages.table');
	}
	public function forms() {
		return view('backend.pages.forms');
	}
	public function icon() {
		return view('backend.pages.icon');
	}
	public function contact() {
		return view('backend.pages.contact');
	}
	public function todoList() {
		return view('backend.pages.todo-list');
	}

	public function help() {
		return view('backend.pages.help');
	}

	public function authSignin() {
		return view('backend.pages.auth.auth-signin');
	}
	public function authSignup() {
		return view('backend.pages.auth.auth-signup');
	}
	public function authPasswordReset() {
		return view('backend.pages.auth.auth-password-reset');
	}
	public function authTwoStep() {
		return view('backend.pages.auth.auth-two-step');
	}
	public function auth404() {
		return view('backend.pages.auth.auth-404');
	}

	public function staterPage() {
		return view('backend.pages.stater-page');
	}

	public function uiAlerts() {
		return view('backend.pages.ui-elements.ui-alerts');
	}
	public function uiBadge() {
		return view('backend.pages.ui-elements.ui-badge');
	}
	public function uiBreadcrumb() {
		return view('backend.pages.ui-elements.ui-breadcrumb');
	}
	public function uiButtons() {
		return view('backend.pages.ui-elements.ui-buttons');
	}
	public function uiCard() {
		return view('backend.pages.ui-elements.ui-card');
	}
	public function uiCarousel() {
		return view('backend.pages.ui-elements.ui-carousel');
	}
	public function uiCollapse() {
		return view('backend.pages.ui-elements.ui-collapse');
	}
	public function uiDropdowns() {
		return view('backend.pages.ui-elements.ui-dropdowns');
	}
	public function uiListgroup() {
		return view('backend.pages.ui-elements.ui-listgroup');
	}
	public function uiModal() {
		return view('backend.pages.ui-elements.ui-modal');
	}
	public function uiNavs() {
		return view('backend.pages.ui-elements.ui-navs');
	}
	public function uiNavbar() {
		return view('backend.pages.ui-elements.ui-navbar');
	}
	public function uiPagination() {
		return view('backend.pages.ui-elements.ui-pagination');
	}
	public function uiPopovers() {
		return view('backend.pages.ui-elements.ui-popovers');
	}
	public function uiProgress() {
		return view('backend.pages.ui-elements.ui-progress');
	}
	public function uiScrollspy() {
		return view('backend.pages.ui-elements.ui-scrollspy');
	}
	public function uiSpinners() {
		return view('backend.pages.ui-elements.ui-spinners');
	}
	public function uiToasts() {
		return view('backend.pages.ui-elements.ui-toasts');
	}
	public function uiTooltips() {
		return view('backend.pages.ui-elements.ui-tooltips');
	}

	public function documentation() {
		return view('backend.pages.documentation');
	}
	public function changelog() {
		return view('backend.pages.changelog');
	}

}
