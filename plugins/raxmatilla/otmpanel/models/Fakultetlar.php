<?php namespace raxmatilla\OtmPanel\Models;

use BackendAuth;
use Model;

/**
 * Model
 */
class Fakultetlar extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\Sluggable;
    
    /**
     * @var string table in the database used by the model.
     */
    public $table = 'raxmatilla_otmpanel_fakultetlar';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
    
    // Agar slug ga avtomatik i++ son qo'shilishini istasak pastdagi metod yoziladi
    protected $slugs = ['slug' => 'nomlanishi'];
    
    // Agar formada surat yuklash kerak bo'lsa shu metod orqali uni amalga oshirish mumkin
    public $attachOne = [
        'img_logo' => ['System\Models\File'],
        'img_fon'  => ['System\Models\File'],
        'ppt_embed'  => ['System\Models\File'],
        'pdf_embed'  => ['System\Models\File'],
        'surat' => ['System\Models\File'],
        'surat_boshliq'  => ['System\Models\File'],
        'file'  => ['System\Models\File'],
    ];
    
    
     // fakultatga tegishli gallereya uchun
     public $attachMany = [
        'gallereya' => ['System\Models\File']
    ];
    
    
    // Repeatslarni yoqish uchun
    protected $jsonable = ['files_repeat', 'boshliq_repeat', 'xodimlar_repeat'];
    
     // Agar saqlashdan oldin nimadur amaliyot qilish zarur bo'lsa beforeSave() funksiyasidan foydalanish mumkin
    public function beforeSave(){ 
        $user = BackendAuth::getUser(); 
        $this->creater_user_id = $user->id; 
        // $this->user_id - refers to your table column
    }
   
 
    public $belongsTo = ['user'=>'Backend\Models\User'];


}
