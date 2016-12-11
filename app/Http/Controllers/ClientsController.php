<?php

namespace App\Http\Controllers;

use App\Color;
use App\Order;
use App\Item;
use App\Increase;
use App\Product;
use App\Section;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function __construct() {
  		$this->middleware('auth');
  	}

    public function index()
    {
        //
    }

    public function create(Section $section)
    {
        $sections = Section::all();
        $colors = Color::all();
        $increases = Increase::all();
        $user = Auth::user();
        if($order = $user->orders()->where('state', 1)->first()){
          return view('clients.newOrder', compact('sections', 'section', 'order', 'colors', 'increases'));
        }else{
          $order = new Order([
            'state' => 1,
            'active' => 1,
          ]);

          $user->orders()->save($order);
          return view('clients.newOrder', compact('sections', 'section', 'order'));
        }
        return view('clients.newOrder', compact('sections', 'section', 'order'));
    }

    public function addItem(Request $request)
    {
      $order = Order::find($request->input('order_id'));
      $product = Product::find($request->input('product_id'));

      if($existItem = $order->items()->where('order_id', $order->id)->where('product_id', $product->id)->first()){
        if($request->input('quantity') > 0){
          $existItem->quantity = $request->input('quantity');
          $existItem->save();
          $section_id = 0;
          $deleteSection = 0;
        }else{
          $existItem->delete();
          $section_id = $item->product->section_id;
          $deleteSection = 1;
        }

      }else{
        $item = new Item([
          'product_id' => $product->id,
          'price' => $product->price,
          'quantity' => $request->input('quantity'),
        ]);

        $item_id = $item->id;

        $order->items()->save($item);
        $section_id = $item->product->section_id;
        $deleteSection = 0;
      }

      return response()->json([
        'product_id' => $product->id,
        'price' => $product->price,
        'quantity' => $request->input('quantity'),
        'order_id' => $order->id,
        'totalOrder' => $order->total(),
        'section_id' => $section_id,
        'deleteSection' => $deleteSection,
        'item_id' => $item_id,
      ]);
    }

    public function updateItem(Request $request)
    {
      $item = Item::find($request->input('item_id'));
      $item->quantity = $request->input('quantity');
      $item->save();

        return response()->json([
          'item_id' => $item->id,
          'price' => $item->product->price,
          'quantity' => $item->quantity,
          'totalOrder' => $item->order->total(),
          'order_id' => $item->order_id,
  			]);
    }

    public function deleteItem(Item $item)
    {
      $item->delete();
      $totalOrder = $item->order->total();

      return response()->json([
        'item_id' => $item->id,
        'product_id' => $item->product_id,
        'order_id' => $item->order_id,
        'totalOrder' => $totalOrder,
        'section_id' => $item->product->section_id,
      ]);
    }

    public function confirm(Order $order)
    {
      $order->state = 2;
      $order->save();
      return view('clients.confirmOrder', compact('order'));
    }

    public function showConfirm(Order $order)
    {
        if(Auth::user()->usertype_id == 1){
          return view('clients.showConfirm', compact('order'));
        }else{
          return view('admin.showConfirm', compact('order'));
        }
    }

    public function pendingOrders()
    {
        $orders = Auth::user()->pendingOrders();
        if(Auth::user()->usertype_id == 1){
          return view('clients.pendingOrders', compact('orders'));
        }else{
          return view('admin.pendingOrders', compact('orders'));
        }

    }

    public function deliveredOrders()
    {
        $orders = Auth::user()->deliveredOrders();
        if(Auth::user()->usertype_id == 1){
          return view('clients.deliveredOrders', compact('orders'));
        }else{
          return view('admin.deliveredOrders', compact('orders'));
        }
    }

    public function show(Order $order)
    {
        return view('clients.show', compact('order'));
    }

    public function deliverOrder(Order $order)
    {
      $id = $order->id;
      $order->state = 3;
      $order->save();

      return response()->json([
        'order_id' => $id,
      ]);
    }

    public function deleteOrder(Order $order)
    {
      $id = $order->id;
      $order->delete();

      return response()->json([
        'order_id' => $id,
      ]);
    }
}
