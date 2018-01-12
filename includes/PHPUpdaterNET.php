<?php

/**
 * PHP Updater NET class
 * @author Ethem Kurt
 *
 */
class PHPUpdaterNET
{

    /**
     * Update
     *
     * @var object
     */
    private $update = null;

    /**
     * Constructor
     *
     * @param string $updateJSONURL
     *            Update JSON URL
     */
    function __construct($updateJSONURI)
    {
        if (is_string($updateJSONURI))
        {
            $this->update = json_decode(file_get_contents($updateJSONURI));
        }
    }

    /**
     * Get SHA512 of download
     * 
     * @return string SHA512 of download
     */
    public function GetSHA512()
    {
        $ret = '';
        if ($this->update != null)
        {
            if (isset($this->update->sha512))
            {
                if (is_string($this->update->sha512))
                {
                    $ret = $this->update->sha512;
                }
            }
        }
        return $ret;
    }

    /**
     * Get URI
     * 
     * @return string URI
     */
    public function GetURI()
    {
        $ret = '';
        if ($this->update != null)
        {
            if (isset($this->update->uri))
            {
                if (is_string($this->update->uri))
                {
                    $ret = $this->update->uri;
                }
            }
        }
        return $ret;
    }

    /**
     * Get version
     * 
     * @return string Version
     */
    public function GetVersion()
    {
        $ret = '';
        if ($this->update != null)
        {
            if (isset($this->update->version))
            {
                if (is_string($this->update->version))
                {
                    $ret = $this->update->version;
                }
            }
        }
        return $ret;
    }

    /**
     * Get version number
     * 
     * @return integer Version number
     */
    public function GetVersionNumber()
    {
        $ret = 0;
        if ($this->update != null)
        {
            if (isset($this->update->version_number))
            {
                if (is_string($this->update->version_number))
                {
                    $ret = $this->update->version_number;
                }
            }
        }
        return $ret;
    }
}
?>