<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transactions extends Controller
{
    public function loans()
    {
        return view('transactions.loans');
    }

    public function qr()
    {
        return view('transactions.qr-payments');
    }

    public function transfer()
    {
        // Ejemplo de contactos recientes
        $recentContacts = [
            ['name' => 'Juan Pérez', 'account' => '1234567890'],
            ['name' => 'María López', 'account' => '0987654321'],
            ['name' => 'Carlos García', 'account' => '1122334455'],
        ];

        return view('transactions.transfers', compact('recentContacts'));
    }


    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'account' => 'required|string',
            'amount' => 'required|numeric|min:1',
            'description' => 'nullable|string',
        ]);

        // Aquí iría la lógica real de transferencia
        // Por ahora, solo redirigimos con mensaje de éxito
        return redirect()->route('transactions.transfer')
            ->with('success', 'Transferencia realizada correctamente.');
    }



}
