<?php

namespace Viber\Api\Keyboard;

use Viber\Api\Entity;

/**
 * InternalBrowser property button.
 *
 *
 * @see https://developers.viber.com/docs/tools/keyboards/
 *
 * @author YUV <voronayu1331@gmail.com>
 */
class InternalBrowser extends Entity
{
    protected $ActionButton = 'forward';

    protected $ActionPredefinedURL;

    protected $TitleType;

    protected $CustomTitle;

    protected $Mode;

    protected $FooterType;

    protected $ActionReplyData;


    /**
     * {@inheritDoc}
     */
    public function toArray()
    {
        return [
            'ActionButton' => $this->getActionButton(),
            'ActionPredefinedURL' => $this->getActionPredefinedURL(),
            'TitleType' => $this->getTitleType(),
            'CustomTitle' => $this->getCustomTitle(),
            'Mode' => $this->getMode(),
            'FooterType' => $this->getFooterType(),
            'ActionReplyData' => $this->getActionReplyData()
        ];
    }

    public function getActionButton()
    {
        return $this->ActionButton;
    }

    public function setActionButton($ActionButton)
    {
        $this->ActionButton = $ActionButton;

        return $this;
    }

    public function getActionPredefinedURL()
    {
        return $this->ActionPredefinedURL;
    }

    public function setActionPredefinedURL($ActionPredefinedURL)
    {
        $this->ActionPredefinedURL = $ActionPredefinedURL;

        return $this;
    }

    public function getTitleType()
    {
        return $this->TitleType;
    }

    public function setTitleType($TitleType)
    {
        $this->TitleType = $TitleType;

        return $this;
    }

    public function getCustomTitle()
    {
        return $this->CustomTitle;
    }

    public function setCustomTitle($CustomTitle)
    {
        $this->CustomTitle = $CustomTitle;

        return $this;
    }

    public function getMode()
    {
        return $this->Mode;
    }

    public function setMode($Mode)
    {
        $this->Mode = $Mode;

        return $this;
    }

    public function getFooterType()
    {
        return $this->FooterType;
    }

    public function setFooterType($FooterType)
    {
        $this->FooterType = $FooterType;

        return $this;
    }

    public function getActionReplyData()
    {
        return $this->ActionReplyData;
    }

    public function setActionReplyData($ActionReplyData)
    {
        $this->ActionReplyData = $ActionReplyData;

        return $this;
    }
}
