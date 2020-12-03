<?php
require "IcsVevent.php";

function set_file_text($file, $text)
{
    $myfile = fopen($file, 'w') or die('Unable to open file!');
    fwrite($myfile, $text);
    fclose($myfile);
}

class IcsUtil
{
    // VCALENDAR
    private $version;
    private $prodid;
    private $calname;

    // VTIMEZONE
    private $tzid;

    // STANDARD
    private $dtstart;
    private $rrule;
    private $tzname;
    private $tzoffsetfrom;
    private $tzoffsetto;

    // VEVEMTS
    private $vevents;

    public function __construct(
        String $calname,
        String $tzid,
        String $dtstart,
        String $rrule,
        String $tzname,
        String $tzoffsetfrom,
        String $tzoffsetto,
        String $version = "2.0",
        String $prodid = "-//TZICSPHP//ICS Version 1//CN"
    ) {
        $this->version = $version;
        $this->provdid = $prodid;
        $this->calname = $calname;
        $this->tzid = $tzid;
        $this->dtstart = $dtstart;
        $this->rrule = $rrule;
        $this->tzname = $tzname;
        $this->tzoffsetfrom = $tzoffsetfrom;
        $this->tzoffsetto = $tzoffsetto;
    }

    public function toIcs()
    {

        $veventStr = "";

        foreach ($this->vevents as $item) {
            $veventStr = $veventStr . $item->toIcs();
        }

        return 'BEGIN:VCALENDAR
VERSION:' . $this->version . '
PRODID:' . $this->prodid . '
X-WR-CALNAME;VALUE=TEXT:' . $this->calname . '
BEGIN:VTIMEZONE
TZID:' . $this->tzid . '
BEGIN:STANDARD
DTSTART:' . $this->dtstart . '
RRULE:' . $this->rrule . '
TZNAME:' . $this->tzname . '
TZOFFSETFROM:' . $this->tzoffsetfrom . '
TZOFFSETTO:' . $this->tzoffsetto . '
END:STANDARD
END:VTIMEZONE' . $veventStr . '
END:VCALENDAR
';
    }

    public function addVevents(IcsVevent $vevent)
    {
        if (!$this->vevents) {
            $this->vevents = array();
        }

        array_push($this->vevents, $vevent);
    }

    /**
     * Get the value of version
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set the value of version
     *
     * @return  self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get the value of prodid
     */
    public function getProdid()
    {
        return $this->prodid;
    }

    /**
     * Set the value of prodid
     *
     * @return  self
     */
    public function setProdid($prodid)
    {
        $this->prodid = $prodid;

        return $this;
    }

    /**
     * Get the value of calname
     */
    public function getCalname()
    {
        return $this->calname;
    }

    /**
     * Set the value of calname
     *
     * @return  self
     */
    public function setCalname($calname)
    {
        $this->calname = $calname;

        return $this;
    }

    /**
     * Get the value of tzid
     */
    public function getTzid()
    {
        return $this->tzid;
    }

    /**
     * Set the value of tzid
     *
     * @return  self
     */
    public function setTzid($tzid)
    {
        $this->tzid = $tzid;

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
     * Get the value of rrule
     */
    public function getRrule()
    {
        return $this->rrule;
    }

    /**
     * Set the value of rrule
     *
     * @return  self
     */
    public function setRrule($rrule)
    {
        $this->rrule = $rrule;

        return $this;
    }

    /**
     * Get the value of tzoffsetto
     */
    public function getTzoffsetto()
    {
        return $this->tzoffsetto;
    }

    /**
     * Set the value of tzoffsetto
     *
     * @return  self
     */
    public function setTzoffsetto($tzoffsetto)
    {
        $this->tzoffsetto = $tzoffsetto;

        return $this;
    }

    /**
     * Get the value of tzoffsetfrom
     */
    public function getTzoffsetfrom()
    {
        return $this->tzoffsetfrom;
    }

    /**
     * Set the value of tzoffsetfrom
     *
     * @return  self
     */
    public function setTzoffsetfrom($tzoffsetfrom)
    {
        $this->tzoffsetfrom = $tzoffsetfrom;

        return $this;
    }

    /**
     * Get the value of tzname
     */
    public function getTzname()
    {
        return $this->tzname;
    }

    /**
     * Set the value of tzname
     *
     * @return  self
     */
    public function setTzname($tzname)
    {
        $this->tzname = $tzname;

        return $this;
    }

    /**
     * Get the value of vevents
     */
    public function getVevents()
    {
        return $this->vevents;
    }

    /**
     * Set the value of vevents
     *
     * @return  self
     */
    public function setVevents($vevents)
    {
        $this->vevents = $vevents;
        return $this;
    }

}

$icsObj = new IcsUtil(
    "是天真呀",
    "Asia/Shanghai",
    "20000101T000000",
    "FREQ=YEARLY;BYMONTH=1",
    "CST",
    "+0800",
    "+0800");
$veventObj = new IcsVevent(
    "a1a52985-be41-437f-ab2d-a7a2444c5130",
    "Asia/Shanghai:20201226T170000",
    "Asia/Shanghai:20201226T173000",
    "20201226T042226Z",
    "Hello Bin, toDay you need to home",
    "20201226T040459",
    "0",
    "CONFIRMED",
    "To Home",
    "OPAQUE",
    "DISPLAY",
    "-PT5M");
$veventObj1 = new IcsVevent(
    "a1a52985-be41-437f-ab2d-a7a2444c5131",
    "Asia/Shanghai:20201227T170000",
    "Asia/Shanghai:20201227T173000",
    "20201226T042226Z",
    "Hello Bin, toDay you need to home",
    "20201226T040459",
    "0",
    "CONFIRMED",
    "To Home 002",
    "OPAQUE",
    "DISPLAY",
    "-PT5M");
$icsObj->addVevents($veventObj);
$icsObj->addVevents($veventObj1);
$icsObj->addVevents($veventObj);

// var_dump($icsObj->toIcs());

set_file_text('./test.ics', $icsObj->toIcs());
