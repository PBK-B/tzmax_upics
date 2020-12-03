<?php

class IcsVevent
{
    private $uid;
    private $dtstart;
    private $dtend;
    private $created;
    private $description;
    private $dtstamp;
    private $sequence;
    private $status;
    private $summary;
    private $transp;

    // VALARM
    private $action;
    private $trigger;

    public function __construct(
        $uid,
        $dtstart,
        $dtend,
        $created,
        $description,
        $dtstamp,
        $sequence,
        $status,
        $summary,
        $transp,
        $action,
        $trigger
    ) {
        $this->uid = $uid;
        $this->dtstart = $dtstart;
        $this->dtend = $dtend;
        $this->created = $created;
        $this->description = $description;
        $this->dtstamp = $dtstamp;
        $this->sequence = $sequence;
        $this->status = $status;
        $this->summary = $summary;
        $this->transp = $transp;
        $this->action = $action;
        $this->trigger = $trigger;
    }

    public function toIcs()
    {
        return '
BEGIN:VEVENT
UID:' . $this->uid . '
DTSTART;TZID=' . $this->dtstart . '
DTEND;TZID=' . $this->dtend . '
CREATED:' . $this->created . '
DESCRIPTION:' . $this->description . '
DTSTAMP:' . $this->dtstamp . '
LOCATION;X-CALDAV-LOCATION-ADDRESS=;X-CALDAV-LOCATION-CNT=1;X-CALDAV-LOCATI
 ON-LATITUDE=360;X-CALDAV-LOCATION-LONGITUDE=360;X-CALDAV-LOCATION-TYPE=2:
SEQUENCE:' . $this->sequence . '
STATUS:' . $this->status . '
SUMMARY:' . $this->summary . '
TRANSP:' . $this->transp . '
BEGIN:VALARM
ACTION:' . $this->action . '
TRIGGER:' . $this->trigger . '
END:VALARM
X-CALDAV-CEXTRA:UFipAAhBmUWJpD-Z_xCp0au9Ft6wq7BJsjzXkrKICGg=
X-CALDAV-OEXTRA:UFipAAhBmUWJpD-Z_xCp0au9Ft6wq7BJsjzXkrKICGg=
END:VEVENT';
    }

    /**
     * Get the value of uid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set the value of uid
     *
     * @return  self
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get the value of dtstart
     */
    public function getDtstart()
    {
        return $this->dtstart;
    }

    /**
     * Set the value of dtstart
     *
     * @return  self
     */
    public function setDtstart($dtstart)
    {
        $this->dtstart = $dtstart;

        return $this;
    }

    /**
     * Get the value of dtend
     */
    public function getDtend()
    {
        return $this->dtend;
    }

    /**
     * Set the value of dtend
     *
     * @return  self
     */
    public function setDtend($dtend)
    {
        $this->dtend = $dtend;

        return $this;
    }

    /**
     * Get the value of created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set the value of created
     *
     * @return  self
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of dtstamp
     */
    public function getDtstamp()
    {
        return $this->dtstamp;
    }

    /**
     * Set the value of dtstamp
     *
     * @return  self
     */
    public function setDtstamp($dtstamp)
    {
        $this->dtstamp = $dtstamp;

        return $this;
    }

    /**
     * Get the value of sequence
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set the value of sequence
     *
     * @return  self
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of summary
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set the value of summary
     *
     * @return  self
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get the value of transp
     */
    public function getTransp()
    {
        return $this->transp;
    }

    /**
     * Set the value of transp
     *
     * @return  self
     */
    public function setTransp($transp)
    {
        $this->transp = $transp;

        return $this;
    }

    /**
     * Get the value of action
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set the value of action
     *
     * @return  self
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get the value of trigger
     */
    public function getTrigger()
    {
        return $this->trigger;
    }

    /**
     * Set the value of trigger
     *
     * @return  self
     */
    public function setTrigger($trigger)
    {
        $this->trigger = $trigger;

        return $this;
    }
}
