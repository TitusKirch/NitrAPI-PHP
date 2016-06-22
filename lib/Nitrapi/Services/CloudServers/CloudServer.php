<?php

namespace Nitrapi\Services\CloudServers;

use Nitrapi\Nitrapi;
use Nitrapi\Services\Service;

class CloudServer extends Service
{
    protected $game;
    protected $info = null;

    public function __construct(Nitrapi &$api, &$data) {
        parent::__construct($api, $data);
        $this->refresh();
    }

    public function refresh() {
        if ($this->getStatus() == self::SERVICE_STATUS_ACTIVE) {
            $url = "services/" . $this->getId() . "/cloud_servers";
            $this->info = $this->getApi()->dataGet($url);
        }
    }

    /**
     * Returns informations about the gameserver
     *
     * @return mixed
     */
    public function getDetails() {
        return new CloudServerDetails($this->info['cloud_server']);
    }

    public static function getAvailableImages(Nitrapi &$nitrapi) {
        $images = $nitrapi->dataGet('/information/cloud_servers/images');
        $imgs = [];
        foreach ($images['images'] as $image)
            $imgs[] = new Image($image['id'], $image['name'], $image['is_windows']);
        return $imgs;
    }
}