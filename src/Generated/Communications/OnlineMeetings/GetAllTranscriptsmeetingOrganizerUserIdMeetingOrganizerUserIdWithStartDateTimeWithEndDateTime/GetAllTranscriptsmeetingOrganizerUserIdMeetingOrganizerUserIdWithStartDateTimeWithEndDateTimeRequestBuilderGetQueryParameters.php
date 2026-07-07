<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetings\GetAllTranscriptsmeetingOrganizerUserIdMeetingOrganizerUserIdWithStartDateTimeWithEndDateTime;

use DateTime;
use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get all transcripts from scheduled onlineMeeting instances for which the specified user is the organizer. This API currently doesn't support getting call transcripts from channel meetings. You can apply the delta function on getAllTranscripts to synchronize and get callTranscript resources as they're added for onlineMeeting instances organized by the specified user. Delta query supports both full synchronization and incremental synchronization. Full synchronization gets all the transcripts for online meetings organized by the user. Incremental synchronization gets transcripts that are added since the last synchronization. Typically, you perform an initial full synchronization, and then get incremental changes to that recording view periodically. For more information, see delta query. For more examples, see callTranscript: delta. To learn more about using the Microsoft Teams export APIs to export content, see Export content with the Microsoft Teams export APIs.
*/
class GetAllTranscriptsmeetingOrganizerUserIdMeetingOrganizerUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24count")
     * @var bool|null $count Include count of items
    */
    public ?bool $count = null;
    
    /**
     * @var DateTime|null $endDateTime Usage: endDateTime=@endDateTime
    */
    public ?DateTime $endDateTime = null;
    
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
    /**
     * @var string|null $meetingOrganizerUserId Usage: meetingOrganizerUserId='@meetingOrganizerUserId'
    */
    public ?string $meetingOrganizerUserId = null;
    
    /**
     * @QueryParameter("%24orderby")
     * @var array<string>|null $orderby Order items by property values
    */
    public ?array $orderby = null;
    
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * @QueryParameter("%24skip")
     * @var int|null $skip Skip the first n items
    */
    public ?int $skip = null;
    
    /**
     * @var DateTime|null $startDateTime Usage: startDateTime=@startDateTime
    */
    public ?DateTime $startDateTime = null;
    
    /**
     * @QueryParameter("%24top")
     * @var int|null $top Show only the first n items
    */
    public ?int $top = null;
    
    /**
     * Instantiates a new GetAllTranscriptsmeetingOrganizerUserIdMeetingOrganizerUserIdWithStartDateTimeWithEndDateTimeRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $count Include count of items
     * @param DateTime|null $endDateTime Usage: endDateTime=@endDateTime
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param string|null $meetingOrganizerUserId Usage: meetingOrganizerUserId='@meetingOrganizerUserId'
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param DateTime|null $startDateTime Usage: startDateTime=@startDateTime
     * @param int|null $top Show only the first n items
    */
    public function __construct(?bool $count = null, ?DateTime $endDateTime = null, ?array $expand = null, ?string $filter = null, ?string $meetingOrganizerUserId = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?DateTime $startDateTime = null, ?int $top = null) {
        $this->count = $count;
        $this->endDateTime = $endDateTime;
        $this->expand = $expand;
        $this->filter = $filter;
        $this->meetingOrganizerUserId = $meetingOrganizerUserId;
        $this->orderby = $orderby;
        $this->search = $search;
        $this->select = $select;
        $this->skip = $skip;
        $this->startDateTime = $startDateTime;
        $this->top = $top;
    }

}
