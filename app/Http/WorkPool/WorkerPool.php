<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/12/21
 * Time: 15:33
 */

namespace App\Http\WorkPool;

use Countable;

class WorkerPool implements Countable
{
    /**
     * @var StringReverseWorker[];
     */
    private $occupiedWorkers = [];

    private $freeWorkers = [];

    public function get(): StringReverseWorker
    {
        if(count($this->freeWorkers) == 0 ) {
            $worker = new StringReverseWorker();
        }else{
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    public function dispose(StringReverseWorker $worker)
    {
        //spl_object_hash为指定对象返回一个唯一的标识符，这个标识符可用于作为对象或者区分不同对象的hash key
        //返回值 字符串，对于每个对象它都是唯一的，并且对同一个对象它总是相同
        $key = spl_object_hash($worker);

        if(isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count(): int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }

}