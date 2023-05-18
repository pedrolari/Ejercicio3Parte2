<?php

namespace App\Entities;

class Email
{
    private string $from;
    private string $fromName;
    private string $to;
    private string $replyTo;
    private string $subject;
    private string $body;


    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }


    /**
     * @param string $from
     *
     * @return Email
     */
    public function setFrom(string $from): self
    {
        $this->from = $from;
        return $this;
    }


    /**
     * @return string
     */
    public function getFromName(): string
    {
        return $this->fromName;
    }


    /**
     * @param string $fromName
     *
     * @return Email
     */
    public function setFromName(string $fromName): self
    {
        $this->fromName = $fromName;
        return $this;
    }


    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }


    /**
     * @param string $to
     *
     * @return Email
     */
    public function setTo(string $to): self
    {
        $this->to = $to;
        return $this;
    }


    /**
     * @return string
     */
    public function getReplyTo(): string
    {
        return $this->replyTo;
    }


    /**
     * @param string $replyTo
     *
     * @return Email
     */
    public function setReplyTo(string $replyTo): self
    {
        $this->replyTo = $replyTo;
        return $this;
    }


    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }


    /**
     * @param string $subject
     *
     * @return Email
     */
    public function setSubject(string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }


    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }


    /**
     * @param string $body
     *
     * @return Email
     */
    public function setBody(string $body): self
    {
        $this->body = $body;
        return $this;
    }
}
