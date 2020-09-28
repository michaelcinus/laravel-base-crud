<?php

namespace App\Http\Controllers;

use App\Pagamenti;
use Illuminate\Http\Request;

class PagamentiController extends Controller
{
    public function index() {

        $pagamenti = Pagamenti::all();

        return view('pagamenti', compact('pagamenti'));
    
    }

    public function destroy($id) {

        $pagamento = Pagamenti::findOrFail($id);
        $pagamento -> delete();

        return redirect() -> route('pagamenti.index');

    }

    public function edit($id) {

        $pagamento = Pagamenti::findOrFail($id);
        return view('pagamento-edit', compact('pagamento'));

    }

    public function update(Request $request, $id) {

        $data = $request -> all();
        $pagamento = Pagamenti::findOrFail($id);
        $pagamento -> update($data);

        return redirect() -> route('pagamenti.index');
    }

}
