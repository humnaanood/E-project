<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Staff;
use App\Models\Product;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Appointment;
use App\Models\Category;

class adminController extends Controller
{
    public function dashboard(){
        return view('dashboard.index');
    }
}

namespace App\Http\Controllers;





    {
        // Optional: counts for dashboard widgets
        $users = User::count();
        $staff = Staff::count();
        $products = Product::count();
        $orders = Order::count();
        $payments = Payment::count();
        $appointments = Appointment::count();
        $categories = Category::count();

        return view('dashboard.index', compact(
            'users', 'staff', 'products', 'orders', 'payments', 'appointments', 'categories'
        ));
    }

