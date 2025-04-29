<?php

namespace Microsoft\Graph\Generated\Users\Item\OnlineMeetings\Item\Transcripts\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve a callTranscript object associated with a scheduled onlineMeeting. This API supports the retrieval of call transcripts from private chat meetings and channel meetings. However, private channel meetings are not supported at this time. Retrieving the transcript returns the metadata of the single transcript associated with the online meeting. Retrieving the content of the transcript returns the stream of text associated with the transcript.
*/
class CallTranscriptItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new CallTranscriptItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
