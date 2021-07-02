<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Http\Controllers\Controller;
use App\Models\SingleOption;
use Illuminate\Http\Request;

class SingleOptionController extends Controller
{

    public function index()
    {
        $this->authorize('manage', SingleOption::class);
        $options = SingleOption::all();
        return view('dashboard.single-options.index', compact('options'));
    }




    public function update(Request $request, SingleOption $single_option)
    {
        $this->authorize('edit', $single_option);

        if (array_key_exists($single_option->name, $request->all())) {
            $single_option->update([
                'value' => $request->{$single_option->name}
            ]);

            return back()->with('toastr_success', 'بروزرسانی با موفقیت انجام شد');
        }

        return back()->with('toastr_error', 'عملیات ناموفق');

    }
}
