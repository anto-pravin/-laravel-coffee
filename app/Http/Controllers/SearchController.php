<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    function index()
    {
     return view('search.search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('coffees')
         ->where('id', 'like', '%'.$query.'%')
         ->orWhere('name', 'like', '%'.$query.'%')
         ->orWhere('branch', 'like', '%'.$query.'%')
         ->orWhere('type', 'like', '%'.$query.'%')
         ->orWhere('sugar', 'like', '%'.$query.'%')
         ->orWhere('sugarquantity', 'like', '%'.$query.'%')
         ->orWhere('addons', 'like', '%'.$query.'%')
         ->orWhere('other', 'like', '%'.$query.'%')
         ->orWhere('quantity', 'like', '%'.$query.'%')
         ->orWhere('address', 'like', '%'.$query.'%')
         ->orderBy('id')
         ->get();
         
      }
      else
      {
       $data = DB::table('coffees')
         ->orderBy('id')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
            <td>'.$row->id.'</td>
            <td>'.$row->name.'</td>
            <td>'.$row->branch.'</td>
            <td>'.$row->type.'</td>
            <td>'.$row->sugar.'</td>
            <td>'.$row->sugarquantity.'</td>
            <td>'.$row->addons.'</td>
            <td>'.$row->other.'</td>
            <td>'.$row->quantity.'</td>
            <td>'.$row->address.'</td>
            <td>
                <a href="/coffee/update/'.$row->id.'" class="p-1" style="text-decoration:none; border-radius:4px; color:white;border:0;background-color:#C30327">
                    update
                </a>
            </td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="11">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}