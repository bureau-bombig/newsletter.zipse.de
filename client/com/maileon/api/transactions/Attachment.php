<?php

/**
 * A binary file attached to a transaction e-mail.
 *
 * @author Marcus Beckerle | XQueue GmbH | <a href="mailto:marcus.beckerle@xqueue.com">marcus.beckerle@xqueue.com</a>
 */
class com_maileon_api_transactions_Attachment
{
    public $filename;
    public $mimetype;
    public $data;

    /**
     * Creates a new attachment. Please use the factory methods in com_maileon_api_transactions_Transaction instead of calling this constructor directly.
     * @param $filename
     * @param $mimetype
     * @param $data
     */
    function __construct($filename, $mimetype, $data)
    {
        $this->filename = $filename;
        $this->mimetype = $mimetype;
        $this->data = $data;
    }

    function toString()
    {
        return "Attachment [filename=" . $this->filename . ", mimetype=(" . $this->mimetype . "), content=(" . $this->content . ")]";
    }
}