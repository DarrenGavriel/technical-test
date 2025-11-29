<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'tbl_todo';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'assignee',
        'due_date',
        'time_tracked',
        'status',
        'priority',
    ];

    public static function getTodoByFilter($params){
        $query = self::query();
        if (isset($params['title'])) {
            $query->where('title', 'like', '%' . $params['title'] . '%');
        }

        if (isset($params['assignee'])) {
            $assignee = explode(',', $params['assignee']);
            $query->whereIn('assignee', $assignee);
        }

        if (isset($params['start']) && isset($params['end'])){
            $query->whereBetween('due_date', [$params['start'], $params['end']]);
        } elseif (isset($params['start'])){
            $query->where('due_date', '>=', $params['start']);
        } elseif (isset($params['end'])){
            $query->where('due_date', '<=', $params['end']);
        };

        if (isset($params['min']) && isset($params['max'])){
            $query->whereBetween('time_tracked', [$params['min'], $params['max']]);
        } elseif (isset($params['min'])){
            $query->where('time_tracked', '>=', $params['min']);
        } elseif (isset($params['max'])){
            $query->where('time_tracked', '<=', $params['max']);
        }
        if (isset($params['status'])){
            $status = explode(',', $params['status']);
            $query->whereIn('status', $status);
        };
        if (isset($params['priority'])){
            $priority = explode(',', $params['priority']);
            $query->whereIn('priority', $priority);
        };
        return $query;
    }
}
