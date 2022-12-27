<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingService extends Entity implements Parsable 
{
    /**
     * Instantiates a new bookingService and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingService
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingService {
        return new BookingService();
    }

    /**
     * Gets the additionalInformation property value. Additional information that is sent to the customer when an appointment is confirmed.
     * @return string|null
    */
    public function getAdditionalInformation(): ?string {
        return $this->getBackingStore()->get('additionalInformation');
    }

    /**
     * Gets the customQuestions property value. Contains the set of custom questions associated with a particular service.
     * @return array<BookingQuestionAssignment>|null
    */
    public function getCustomQuestions(): ?array {
        return $this->getBackingStore()->get('customQuestions');
    }

    /**
     * Gets the defaultDuration property value. The default length of the service, represented in numbers of days, hours, minutes, and seconds. For example, P11D23H59M59.999999999999S.
     * @return DateInterval|null
    */
    public function getDefaultDuration(): ?DateInterval {
        return $this->getBackingStore()->get('defaultDuration');
    }

    /**
     * Gets the defaultLocation property value. The default physical location for the service.
     * @return Location|null
    */
    public function getDefaultLocation(): ?Location {
        return $this->getBackingStore()->get('defaultLocation');
    }

    /**
     * Gets the defaultPrice property value. The default monetary price for the service.
     * @return float|null
    */
    public function getDefaultPrice(): ?float {
        return $this->getBackingStore()->get('defaultPrice');
    }

    /**
     * Gets the defaultPriceType property value. Represents the type of pricing of a booking service.
     * @return BookingPriceType|null
    */
    public function getDefaultPriceType(): ?BookingPriceType {
        return $this->getBackingStore()->get('defaultPriceType');
    }

    /**
     * Gets the defaultReminders property value. The default set of reminders for an appointment of this service. The value of this property is available only when reading this bookingService by its ID.
     * @return array<BookingReminder>|null
    */
    public function getDefaultReminders(): ?array {
        return $this->getBackingStore()->get('defaultReminders');
    }

    /**
     * Gets the description property value. A text description for the service.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. A service name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalInformation' => fn(ParseNode $n) => $o->setAdditionalInformation($n->getStringValue()),
            'customQuestions' => fn(ParseNode $n) => $o->setCustomQuestions($n->getCollectionOfObjectValues([BookingQuestionAssignment::class, 'createFromDiscriminatorValue'])),
            'defaultDuration' => fn(ParseNode $n) => $o->setDefaultDuration($n->getDateIntervalValue()),
            'defaultLocation' => fn(ParseNode $n) => $o->setDefaultLocation($n->getObjectValue([Location::class, 'createFromDiscriminatorValue'])),
            'defaultPrice' => fn(ParseNode $n) => $o->setDefaultPrice($n->getFloatValue()),
            'defaultPriceType' => fn(ParseNode $n) => $o->setDefaultPriceType($n->getEnumValue(BookingPriceType::class)),
            'defaultReminders' => fn(ParseNode $n) => $o->setDefaultReminders($n->getCollectionOfObjectValues([BookingReminder::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isAnonymousJoinEnabled' => fn(ParseNode $n) => $o->setIsAnonymousJoinEnabled($n->getBooleanValue()),
            'isHiddenFromCustomers' => fn(ParseNode $n) => $o->setIsHiddenFromCustomers($n->getBooleanValue()),
            'isLocationOnline' => fn(ParseNode $n) => $o->setIsLocationOnline($n->getBooleanValue()),
            'languageTag' => fn(ParseNode $n) => $o->setLanguageTag($n->getStringValue()),
            'maximumAttendeesCount' => fn(ParseNode $n) => $o->setMaximumAttendeesCount($n->getIntegerValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'postBuffer' => fn(ParseNode $n) => $o->setPostBuffer($n->getDateIntervalValue()),
            'preBuffer' => fn(ParseNode $n) => $o->setPreBuffer($n->getDateIntervalValue()),
            'schedulingPolicy' => fn(ParseNode $n) => $o->setSchedulingPolicy($n->getObjectValue([BookingSchedulingPolicy::class, 'createFromDiscriminatorValue'])),
            'smsNotificationsEnabled' => fn(ParseNode $n) => $o->setSmsNotificationsEnabled($n->getBooleanValue()),
            'staffMemberIds' => fn(ParseNode $n) => $o->setStaffMemberIds($n->getCollectionOfPrimitiveValues()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isAnonymousJoinEnabled property value. True if the URL to join the appointment anonymously (anonymousJoinWebUrl) will be generated for the appointment booked for this service.
     * @return bool|null
    */
    public function getIsAnonymousJoinEnabled(): ?bool {
        return $this->getBackingStore()->get('isAnonymousJoinEnabled');
    }

    /**
     * Gets the isHiddenFromCustomers property value. True means this service is not available to customers for booking.
     * @return bool|null
    */
    public function getIsHiddenFromCustomers(): ?bool {
        return $this->getBackingStore()->get('isHiddenFromCustomers');
    }

    /**
     * Gets the isLocationOnline property value. True indicates that the appointments for the service will be held online. Default value is false.
     * @return bool|null
    */
    public function getIsLocationOnline(): ?bool {
        return $this->getBackingStore()->get('isLocationOnline');
    }

    /**
     * Gets the languageTag property value. The language of the self-service booking page.
     * @return string|null
    */
    public function getLanguageTag(): ?string {
        return $this->getBackingStore()->get('languageTag');
    }

    /**
     * Gets the maximumAttendeesCount property value. The maximum number of customers allowed in a service. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
     * @return int|null
    */
    public function getMaximumAttendeesCount(): ?int {
        return $this->getBackingStore()->get('maximumAttendeesCount');
    }

    /**
     * Gets the notes property value. Additional information about this service.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->getBackingStore()->get('notes');
    }

    /**
     * Gets the postBuffer property value. The time to buffer after an appointment for this service ends, and before the next customer appointment can be booked.
     * @return DateInterval|null
    */
    public function getPostBuffer(): ?DateInterval {
        return $this->getBackingStore()->get('postBuffer');
    }

    /**
     * Gets the preBuffer property value. The time to buffer before an appointment for this service can start.
     * @return DateInterval|null
    */
    public function getPreBuffer(): ?DateInterval {
        return $this->getBackingStore()->get('preBuffer');
    }

    /**
     * Gets the schedulingPolicy property value. The set of policies that determine how appointments for this type of service should be created and managed.
     * @return BookingSchedulingPolicy|null
    */
    public function getSchedulingPolicy(): ?BookingSchedulingPolicy {
        return $this->getBackingStore()->get('schedulingPolicy');
    }

    /**
     * Gets the smsNotificationsEnabled property value. True indicates SMS notifications can be sent to the customers for the appointment of the service. Default value is false.
     * @return bool|null
    */
    public function getSmsNotificationsEnabled(): ?bool {
        return $this->getBackingStore()->get('smsNotificationsEnabled');
    }

    /**
     * Gets the staffMemberIds property value. Represents those staff members who provide this service.
     * @return array<string>|null
    */
    public function getStaffMemberIds(): ?array {
        return $this->getBackingStore()->get('staffMemberIds');
    }

    /**
     * Gets the webUrl property value. The URL a customer uses to access the service.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->getBackingStore()->get('webUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('additionalInformation', $this->getAdditionalInformation());
        $writer->writeCollectionOfObjectValues('customQuestions', $this->getCustomQuestions());
        $writer->writeDateIntervalValue('defaultDuration', $this->getDefaultDuration());
        $writer->writeObjectValue('defaultLocation', $this->getDefaultLocation());
        $writer->writeFloatValue('defaultPrice', $this->getDefaultPrice());
        $writer->writeEnumValue('defaultPriceType', $this->getDefaultPriceType());
        $writer->writeCollectionOfObjectValues('defaultReminders', $this->getDefaultReminders());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isAnonymousJoinEnabled', $this->getIsAnonymousJoinEnabled());
        $writer->writeBooleanValue('isHiddenFromCustomers', $this->getIsHiddenFromCustomers());
        $writer->writeBooleanValue('isLocationOnline', $this->getIsLocationOnline());
        $writer->writeStringValue('languageTag', $this->getLanguageTag());
        $writer->writeIntegerValue('maximumAttendeesCount', $this->getMaximumAttendeesCount());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeDateIntervalValue('postBuffer', $this->getPostBuffer());
        $writer->writeDateIntervalValue('preBuffer', $this->getPreBuffer());
        $writer->writeObjectValue('schedulingPolicy', $this->getSchedulingPolicy());
        $writer->writeBooleanValue('smsNotificationsEnabled', $this->getSmsNotificationsEnabled());
        $writer->writeCollectionOfPrimitiveValues('staffMemberIds', $this->getStaffMemberIds());
    }

    /**
     * Sets the additionalInformation property value. Additional information that is sent to the customer when an appointment is confirmed.
     *  @param string|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?string $value): void {
        $this->getBackingStore()->set('additionalInformation', $value);
    }

    /**
     * Sets the customQuestions property value. Contains the set of custom questions associated with a particular service.
     *  @param array<BookingQuestionAssignment>|null $value Value to set for the customQuestions property.
    */
    public function setCustomQuestions(?array $value): void {
        $this->getBackingStore()->set('customQuestions', $value);
    }

    /**
     * Sets the defaultDuration property value. The default length of the service, represented in numbers of days, hours, minutes, and seconds. For example, P11D23H59M59.999999999999S.
     *  @param DateInterval|null $value Value to set for the defaultDuration property.
    */
    public function setDefaultDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('defaultDuration', $value);
    }

    /**
     * Sets the defaultLocation property value. The default physical location for the service.
     *  @param Location|null $value Value to set for the defaultLocation property.
    */
    public function setDefaultLocation(?Location $value): void {
        $this->getBackingStore()->set('defaultLocation', $value);
    }

    /**
     * Sets the defaultPrice property value. The default monetary price for the service.
     *  @param float|null $value Value to set for the defaultPrice property.
    */
    public function setDefaultPrice(?float $value): void {
        $this->getBackingStore()->set('defaultPrice', $value);
    }

    /**
     * Sets the defaultPriceType property value. Represents the type of pricing of a booking service.
     *  @param BookingPriceType|null $value Value to set for the defaultPriceType property.
    */
    public function setDefaultPriceType(?BookingPriceType $value): void {
        $this->getBackingStore()->set('defaultPriceType', $value);
    }

    /**
     * Sets the defaultReminders property value. The default set of reminders for an appointment of this service. The value of this property is available only when reading this bookingService by its ID.
     *  @param array<BookingReminder>|null $value Value to set for the defaultReminders property.
    */
    public function setDefaultReminders(?array $value): void {
        $this->getBackingStore()->set('defaultReminders', $value);
    }

    /**
     * Sets the description property value. A text description for the service.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. A service name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isAnonymousJoinEnabled property value. True if the URL to join the appointment anonymously (anonymousJoinWebUrl) will be generated for the appointment booked for this service.
     *  @param bool|null $value Value to set for the isAnonymousJoinEnabled property.
    */
    public function setIsAnonymousJoinEnabled(?bool $value): void {
        $this->getBackingStore()->set('isAnonymousJoinEnabled', $value);
    }

    /**
     * Sets the isHiddenFromCustomers property value. True means this service is not available to customers for booking.
     *  @param bool|null $value Value to set for the isHiddenFromCustomers property.
    */
    public function setIsHiddenFromCustomers(?bool $value): void {
        $this->getBackingStore()->set('isHiddenFromCustomers', $value);
    }

    /**
     * Sets the isLocationOnline property value. True indicates that the appointments for the service will be held online. Default value is false.
     *  @param bool|null $value Value to set for the isLocationOnline property.
    */
    public function setIsLocationOnline(?bool $value): void {
        $this->getBackingStore()->set('isLocationOnline', $value);
    }

    /**
     * Sets the languageTag property value. The language of the self-service booking page.
     *  @param string|null $value Value to set for the languageTag property.
    */
    public function setLanguageTag(?string $value): void {
        $this->getBackingStore()->set('languageTag', $value);
    }

    /**
     * Sets the maximumAttendeesCount property value. The maximum number of customers allowed in a service. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
     *  @param int|null $value Value to set for the maximumAttendeesCount property.
    */
    public function setMaximumAttendeesCount(?int $value): void {
        $this->getBackingStore()->set('maximumAttendeesCount', $value);
    }

    /**
     * Sets the notes property value. Additional information about this service.
     *  @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the postBuffer property value. The time to buffer after an appointment for this service ends, and before the next customer appointment can be booked.
     *  @param DateInterval|null $value Value to set for the postBuffer property.
    */
    public function setPostBuffer(?DateInterval $value): void {
        $this->getBackingStore()->set('postBuffer', $value);
    }

    /**
     * Sets the preBuffer property value. The time to buffer before an appointment for this service can start.
     *  @param DateInterval|null $value Value to set for the preBuffer property.
    */
    public function setPreBuffer(?DateInterval $value): void {
        $this->getBackingStore()->set('preBuffer', $value);
    }

    /**
     * Sets the schedulingPolicy property value. The set of policies that determine how appointments for this type of service should be created and managed.
     *  @param BookingSchedulingPolicy|null $value Value to set for the schedulingPolicy property.
    */
    public function setSchedulingPolicy(?BookingSchedulingPolicy $value): void {
        $this->getBackingStore()->set('schedulingPolicy', $value);
    }

    /**
     * Sets the smsNotificationsEnabled property value. True indicates SMS notifications can be sent to the customers for the appointment of the service. Default value is false.
     *  @param bool|null $value Value to set for the smsNotificationsEnabled property.
    */
    public function setSmsNotificationsEnabled(?bool $value): void {
        $this->getBackingStore()->set('smsNotificationsEnabled', $value);
    }

    /**
     * Sets the staffMemberIds property value. Represents those staff members who provide this service.
     *  @param array<string>|null $value Value to set for the staffMemberIds property.
    */
    public function setStaffMemberIds(?array $value): void {
        $this->getBackingStore()->set('staffMemberIds', $value);
    }

    /**
     * Sets the webUrl property value. The URL a customer uses to access the service.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
