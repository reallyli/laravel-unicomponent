<?php
/**
 * Created by PhpStorm.
 * User: reallyli
 * Date: 18/10/10
 * Time: 下午4:46.
 */

namespace Reallyli\LaravelUnicomponent\Components\LogFormatter;

use Monolog\Formatter\JsonFormatter as BaseJsonFormatter;

class JsonFormatter extends BaseJsonFormatter implements FormatterInterface
{
    /**
     * Method description:format.
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 18/10/10
     * @param array $record
     * @return mixed
     * 返回值类型：string，array，object，mixed（多种，不确定的），void（无返回值）
     */
    public function format(array $record)
    {
        $newRecord = [
            'time' => $record['datetime']->format('Y-m-d H:i:s'),
            'level' => $record['level_name'],
            'channel' => $record['channel'],
            'message' => $record['message'],
        ];

        if (! empty($record['context'])) {
            $newRecord = array_merge($newRecord, $record['context']);
        }

        return $this->toJson($this->normalize($newRecord), true).($this->appendNewline ? "\n" : '');
    }
}
