<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Trails\ModelScopes;
use Illuminate\Support\Facades\Cache;

class Number extends Model
{
	use ModelScopes; 

    protected $table = 'number';

    protected $fillable = [ 
    	'name', 'slug' ,'content', 'image' , 'type' ,  'status' , 'meta_title' , 'meta_description' , 'meta_keyword', 'file', 'conso', 'file_pdf', 'desc'
	];

    protected $casts = [
        'desc' => 'array',
    ];

    public  function getcacheKey()
    {
        return sprintf(
            "%s/%s-%s",
            self::getTable(),
            self::getKey(),
            strtotime($this->updated_at),
        );
    }

    public static function getType()
    {
        return [
            'noitam' => 'Nội tâm',
        	'noicam' => 'Nội cảm',
        	'tuongtac' => 'Tương tác',
        	'thaido' => 'Thái độ',
        	'solap' => 'Số lặp',
        	'ketnoinoitamvatuongtac' => 'Kết nối nội tâm & Tương tác',
        	'duongdoi' => 'Đường đời',
        	'sumenh' => 'Sứ mệnh',
        	'ngaysinh' => 'Ngày sinh',
        	'truongthanh' => 'Trưởng thành',
        	'ketnoiduongdoivasumenh' => 'Kết nối đường đời & Sứ mệnh',
        	'bosung' => 'Bổ sung',
        	'canbang' => 'Cân bằng',
        	'nonghiep' => 'Nợ nghiệp',
        	'mucdobieuhien' => 'Mức độ biểu hiện',
        	'namcanhan' => 'Năm cá nhân',
        	'thangcanhan' => 'Tháng cá nhân',
        	'dinhcao' => 'Đỉnh cao',
            'thachthucchang' => 'Thách thức chặng',
            'bieuhienvatly' => 'Biểu hiện vật lý - tương tác',
            'bieuhientamtri' => 'Biểu hiện tâm trí - suy nghĩ',
            'bieuhiencamxuc' => 'Biểu hiện cảm xúc- cảm nhận',
        	'bieuhientrucgiac' => 'Biểu hiện trực giác- linh cảm',
        ];
    }
}
