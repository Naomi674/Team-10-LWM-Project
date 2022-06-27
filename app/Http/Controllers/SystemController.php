<?php

namespace App\Http\Controllers;

use App\Models\System;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    /** Function to show the system status page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $systems = System::all();

        return view('status', compact('systems'));
    }

    public function update($id)
    {
        $system = System::find($id);

        if ($system->status === 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $system->update([
            'status' => $status
        ]);

        return redirect(route('status.index'));
    }
}
