<?php

namespace Acquia\Cloud\Api\Response;

class SshKeys extends \Acquia\Common\Collection
{
    /**
     * @var string
     */
    protected $elementClass = '\Acquia\Cloud\Api\Response\SshKey';
}
