<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class RegistrantsTableExportController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:operator|admin']);
    }

    public function preview()
    {
        return view('pdf.operator.table.pdf-format.preview', [
            'registrants' => User::query()
                ->where('has_verified', 1)
                ->select('id', 'name', 'username', 'picture', 'email', 'created_at', 'has_verified')
                ->doesntHave('roles')
                ->with('biodata:id,user_id,fullname,sex,whatsapp,fatherWhatsapp,motherWhatsapp,goals')
                ->get(),
        ]);
    }

    public function tableManual()
    {
        return view('pdf.operator.table.pdf-format.manual', [
            'registrants' => User::query()
                ->where('has_verified', 1)
                ->select('id', 'name', 'username', 'picture', 'email', 'created_at', 'has_verified')
                ->doesntHave('roles')
                ->with('biodata:id,user_id,fullname,sex,whatsapp,fatherWhatsapp,motherWhatsapp,goals')
                ->get(),
        ]);
    }

    public function tableAuto()
    {
        $registrants = User::query()
            ->where('has_verified', 1)
            ->select('id', 'name', 'username', 'picture', 'email', 'created_at', 'has_verified')
            ->doesntHave('roles')
            ->with('biodata:id,user_id,fullname,sex,whatsapp,fatherWhatsapp,motherWhatsapp,goals')
            ->get();
        $pdf = Pdf::loadView('pdf.operator.table.pdf-format.automatic', compact('registrants'))->setPaper('legal', 'landscape');

        return $pdf->download('Daftar-Pendaftar-'.now()->format('Y').'-'.mt_rand(9999, 99999).'.pdf');
    }
}
