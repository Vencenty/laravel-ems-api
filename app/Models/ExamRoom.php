<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ExamRoom
 *
 * @property int $id
 * @property string $name 考场名称
 * @property int $people_limit 最大人数
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExamRoom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExamRoom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExamRoom query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExamRoom whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExamRoom whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExamRoom wherePeopleLimit($value)
 * @mixin \Eloquent
 */
class ExamRoom extends AbstractModel
{
    /** @var int 常规考场 */
    const COMMON = 0;

    /** @var int 补考考场 */
    const RESIT = 1;


    protected $table = 'exam_room';

    public $timestamps = false;

}
