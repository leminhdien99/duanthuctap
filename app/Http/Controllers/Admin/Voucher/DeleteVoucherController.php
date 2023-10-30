<?php

namespace App\Http\Controllers\Admin\Voucher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voucher;

class DeleteVoucherController extends Controller
{
    public $voucher;

    public function __construct(){
        $this->voucher = new Voucher();
    }
    public function deleteVoucher($slug)
    {
        $condition = [
            ['slug', '=', $slug],
        ];
        $value = [
            'delete' => 1,
        ];

        $this->voucher->updateVoucher($condition, $value);
        return redirect()->back()->with('success', 'Đã xoá mềm voucher thành công');
    }

    function VoucherRestor($slug)
    {
        $condition = [
            ['slug', '=', $slug],
        ];
        $value = [
            'delete' => 0,
        ];
        $data = $this->voucher->updateVoucher($condition, $value);
        return redirect()->back()->with('success', 'Đã khôi phục voucher thành công');
    }
}