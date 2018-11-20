<?php
/**
 * Created by PhpStorm.
 * User: uniqueway
 * Date: 2018/11/20
 * Time: 上午11:39.
 */

namespace Reallyli\LaravelUnicomponent\Components\Pusher;

class Pusher
{
    /**
     * trigger.
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 2018/11/20
     * @param mixed $channels
     * @param string $eventName
     * @param array $data
     * @param array $params
     * @return mixed
     */
    public function trigger($channels, string $eventName, array $data, array $params = [])
    {
        $params['channels'] = is_string($channels) ? [$channels] : (array) $channels;
        $params['data'] = $data;
        $params['name'] = $eventName;

        $this->sendRequest($this->getPusherUrl(), $params);
    }

    /**
     * Send Request.
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 2018/11/20
     * @param string $url
     * @param array $data
     * @return mixed
     */
    protected function sendRequest(string $url, array $data)
    {
        $jsonData = json_encode($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            [
                'Content-Type: application/json',
                'Content-Length: '.strlen($jsonData),
            ]
        );

        $response = curl_exec($ch);

        if ($response === false) {
            logger()->error('[LaravelUnicomponent] Pusher Send Request Error, data:'.$jsonData);

            return false;
        }

        return $response;
    }

    /**
     * Get Pusher Url.
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 2018/11/20
     * @return string
     */
    protected function getPusherUrl()
    {
        $pusherUrl = config('unicomponent.components.pusher.configs.pusher_url');

        throw_unless(filter_var($pusherUrl, FILTER_VALIDATE_URL), '\Exception', 'pusher url illegal');

        return $pusherUrl;
    }
}
