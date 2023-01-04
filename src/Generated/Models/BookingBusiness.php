<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingBusiness extends Entity implements Parsable 
{
    /**
     * Instantiates a new bookingBusiness and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingBusiness
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingBusiness {
        return new BookingBusiness();
    }

    /**
     * Gets the address property value. The street address of the business. The address property, together with phone and webSiteUrl, appear in the footer of a business scheduling page. The attribute type of physicalAddress is not supported in v1.0. Internally we map the addresses to the type others.
     * @return PhysicalAddress|null
    */
    public function getAddress(): ?PhysicalAddress {
        return $this->getBackingStore()->get('address');
    }

    /**
     * Gets the appointments property value. All the appointments of this business. Read-only. Nullable.
     * @return array<BookingAppointment>|null
    */
    public function getAppointments(): ?array {
        return $this->getBackingStore()->get('appointments');
    }

    /**
     * Gets the businessHours property value. The hours of operation for the business.
     * @return array<BookingWorkHours>|null
    */
    public function getBusinessHours(): ?array {
        return $this->getBackingStore()->get('businessHours');
    }

    /**
     * Gets the businessType property value. The type of business.
     * @return string|null
    */
    public function getBusinessType(): ?string {
        return $this->getBackingStore()->get('businessType');
    }

    /**
     * Gets the calendarView property value. The set of appointments of this business in a specified date range. Read-only. Nullable.
     * @return array<BookingAppointment>|null
    */
    public function getCalendarView(): ?array {
        return $this->getBackingStore()->get('calendarView');
    }

    /**
     * Gets the customers property value. All the customers of this business. Read-only. Nullable.
     * @return array<BookingCustomerBase>|null
    */
    public function getCustomers(): ?array {
        return $this->getBackingStore()->get('customers');
    }

    /**
     * Gets the customQuestions property value. All the custom questions of this business. Read-only. Nullable.
     * @return array<BookingCustomQuestion>|null
    */
    public function getCustomQuestions(): ?array {
        return $this->getBackingStore()->get('customQuestions');
    }

    /**
     * Gets the defaultCurrencyIso property value. The code for the currency that the business operates in on Microsoft Bookings.
     * @return string|null
    */
    public function getDefaultCurrencyIso(): ?string {
        return $this->getBackingStore()->get('defaultCurrencyIso');
    }

    /**
     * Gets the displayName property value. The name of the business, which interfaces with customers. This name appears at the top of the business scheduling page.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the email property value. The email address for the business.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->getBackingStore()->get('email');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([PhysicalAddress::class, 'createFromDiscriminatorValue'])),
            'appointments' => fn(ParseNode $n) => $o->setAppointments($n->getCollectionOfObjectValues([BookingAppointment::class, 'createFromDiscriminatorValue'])),
            'businessHours' => fn(ParseNode $n) => $o->setBusinessHours($n->getCollectionOfObjectValues([BookingWorkHours::class, 'createFromDiscriminatorValue'])),
            'businessType' => fn(ParseNode $n) => $o->setBusinessType($n->getStringValue()),
            'calendarView' => fn(ParseNode $n) => $o->setCalendarView($n->getCollectionOfObjectValues([BookingAppointment::class, 'createFromDiscriminatorValue'])),
            'customers' => fn(ParseNode $n) => $o->setCustomers($n->getCollectionOfObjectValues([BookingCustomerBase::class, 'createFromDiscriminatorValue'])),
            'customQuestions' => fn(ParseNode $n) => $o->setCustomQuestions($n->getCollectionOfObjectValues([BookingCustomQuestion::class, 'createFromDiscriminatorValue'])),
            'defaultCurrencyIso' => fn(ParseNode $n) => $o->setDefaultCurrencyIso($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'isPublished' => fn(ParseNode $n) => $o->setIsPublished($n->getBooleanValue()),
            'languageTag' => fn(ParseNode $n) => $o->setLanguageTag($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'publicUrl' => fn(ParseNode $n) => $o->setPublicUrl($n->getStringValue()),
            'schedulingPolicy' => fn(ParseNode $n) => $o->setSchedulingPolicy($n->getObjectValue([BookingSchedulingPolicy::class, 'createFromDiscriminatorValue'])),
            'services' => fn(ParseNode $n) => $o->setServices($n->getCollectionOfObjectValues([BookingService::class, 'createFromDiscriminatorValue'])),
            'staffMembers' => fn(ParseNode $n) => $o->setStaffMembers($n->getCollectionOfObjectValues([BookingStaffMemberBase::class, 'createFromDiscriminatorValue'])),
            'webSiteUrl' => fn(ParseNode $n) => $o->setWebSiteUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isPublished property value. The scheduling page has been made available to external customers. Use the publish and unpublish actions to set this property. Read-only.
     * @return bool|null
    */
    public function getIsPublished(): ?bool {
        return $this->getBackingStore()->get('isPublished');
    }

    /**
     * Gets the languageTag property value. The language of the self-service booking page.
     * @return string|null
    */
    public function getLanguageTag(): ?string {
        return $this->getBackingStore()->get('languageTag');
    }

    /**
     * Gets the phone property value. The telephone number for the business. The phone property, together with address and webSiteUrl, appear in the footer of a business scheduling page.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->getBackingStore()->get('phone');
    }

    /**
     * Gets the publicUrl property value. The URL for the scheduling page, which is set after you publish or unpublish the page. Read-only.
     * @return string|null
    */
    public function getPublicUrl(): ?string {
        return $this->getBackingStore()->get('publicUrl');
    }

    /**
     * Gets the schedulingPolicy property value. Specifies how bookings can be created for this business.
     * @return BookingSchedulingPolicy|null
    */
    public function getSchedulingPolicy(): ?BookingSchedulingPolicy {
        return $this->getBackingStore()->get('schedulingPolicy');
    }

    /**
     * Gets the services property value. All the services offered by this business. Read-only. Nullable.
     * @return array<BookingService>|null
    */
    public function getServices(): ?array {
        return $this->getBackingStore()->get('services');
    }

    /**
     * Gets the staffMembers property value. All the staff members that provide services in this business. Read-only. Nullable.
     * @return array<BookingStaffMemberBase>|null
    */
    public function getStaffMembers(): ?array {
        return $this->getBackingStore()->get('staffMembers');
    }

    /**
     * Gets the webSiteUrl property value. The URL of the business web site. The webSiteUrl property, together with address, phone, appear in the footer of a business scheduling page.
     * @return string|null
    */
    public function getWebSiteUrl(): ?string {
        return $this->getBackingStore()->get('webSiteUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeCollectionOfObjectValues('appointments', $this->getAppointments());
        $writer->writeCollectionOfObjectValues('businessHours', $this->getBusinessHours());
        $writer->writeStringValue('businessType', $this->getBusinessType());
        $writer->writeCollectionOfObjectValues('calendarView', $this->getCalendarView());
        $writer->writeCollectionOfObjectValues('customers', $this->getCustomers());
        $writer->writeCollectionOfObjectValues('customQuestions', $this->getCustomQuestions());
        $writer->writeStringValue('defaultCurrencyIso', $this->getDefaultCurrencyIso());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('languageTag', $this->getLanguageTag());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeObjectValue('schedulingPolicy', $this->getSchedulingPolicy());
        $writer->writeCollectionOfObjectValues('services', $this->getServices());
        $writer->writeCollectionOfObjectValues('staffMembers', $this->getStaffMembers());
        $writer->writeStringValue('webSiteUrl', $this->getWebSiteUrl());
    }

    /**
     * Sets the address property value. The street address of the business. The address property, together with phone and webSiteUrl, appear in the footer of a business scheduling page. The attribute type of physicalAddress is not supported in v1.0. Internally we map the addresses to the type others.
     *  @param PhysicalAddress|null $value Value to set for the address property.
    */
    public function setAddress(?PhysicalAddress $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the appointments property value. All the appointments of this business. Read-only. Nullable.
     *  @param array<BookingAppointment>|null $value Value to set for the appointments property.
    */
    public function setAppointments(?array $value): void {
        $this->getBackingStore()->set('appointments', $value);
    }

    /**
     * Sets the businessHours property value. The hours of operation for the business.
     *  @param array<BookingWorkHours>|null $value Value to set for the businessHours property.
    */
    public function setBusinessHours(?array $value): void {
        $this->getBackingStore()->set('businessHours', $value);
    }

    /**
     * Sets the businessType property value. The type of business.
     *  @param string|null $value Value to set for the businessType property.
    */
    public function setBusinessType(?string $value): void {
        $this->getBackingStore()->set('businessType', $value);
    }

    /**
     * Sets the calendarView property value. The set of appointments of this business in a specified date range. Read-only. Nullable.
     *  @param array<BookingAppointment>|null $value Value to set for the calendarView property.
    */
    public function setCalendarView(?array $value): void {
        $this->getBackingStore()->set('calendarView', $value);
    }

    /**
     * Sets the customers property value. All the customers of this business. Read-only. Nullable.
     *  @param array<BookingCustomerBase>|null $value Value to set for the customers property.
    */
    public function setCustomers(?array $value): void {
        $this->getBackingStore()->set('customers', $value);
    }

    /**
     * Sets the customQuestions property value. All the custom questions of this business. Read-only. Nullable.
     *  @param array<BookingCustomQuestion>|null $value Value to set for the customQuestions property.
    */
    public function setCustomQuestions(?array $value): void {
        $this->getBackingStore()->set('customQuestions', $value);
    }

    /**
     * Sets the defaultCurrencyIso property value. The code for the currency that the business operates in on Microsoft Bookings.
     *  @param string|null $value Value to set for the defaultCurrencyIso property.
    */
    public function setDefaultCurrencyIso(?string $value): void {
        $this->getBackingStore()->set('defaultCurrencyIso', $value);
    }

    /**
     * Sets the displayName property value. The name of the business, which interfaces with customers. This name appears at the top of the business scheduling page.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the email property value. The email address for the business.
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the isPublished property value. The scheduling page has been made available to external customers. Use the publish and unpublish actions to set this property. Read-only.
     *  @param bool|null $value Value to set for the isPublished property.
    */
    public function setIsPublished(?bool $value): void {
        $this->getBackingStore()->set('isPublished', $value);
    }

    /**
     * Sets the languageTag property value. The language of the self-service booking page.
     *  @param string|null $value Value to set for the languageTag property.
    */
    public function setLanguageTag(?string $value): void {
        $this->getBackingStore()->set('languageTag', $value);
    }

    /**
     * Sets the phone property value. The telephone number for the business. The phone property, together with address and webSiteUrl, appear in the footer of a business scheduling page.
     *  @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->getBackingStore()->set('phone', $value);
    }

    /**
     * Sets the publicUrl property value. The URL for the scheduling page, which is set after you publish or unpublish the page. Read-only.
     *  @param string|null $value Value to set for the publicUrl property.
    */
    public function setPublicUrl(?string $value): void {
        $this->getBackingStore()->set('publicUrl', $value);
    }

    /**
     * Sets the schedulingPolicy property value. Specifies how bookings can be created for this business.
     *  @param BookingSchedulingPolicy|null $value Value to set for the schedulingPolicy property.
    */
    public function setSchedulingPolicy(?BookingSchedulingPolicy $value): void {
        $this->getBackingStore()->set('schedulingPolicy', $value);
    }

    /**
     * Sets the services property value. All the services offered by this business. Read-only. Nullable.
     *  @param array<BookingService>|null $value Value to set for the services property.
    */
    public function setServices(?array $value): void {
        $this->getBackingStore()->set('services', $value);
    }

    /**
     * Sets the staffMembers property value. All the staff members that provide services in this business. Read-only. Nullable.
     *  @param array<BookingStaffMemberBase>|null $value Value to set for the staffMembers property.
    */
    public function setStaffMembers(?array $value): void {
        $this->getBackingStore()->set('staffMembers', $value);
    }

    /**
     * Sets the webSiteUrl property value. The URL of the business web site. The webSiteUrl property, together with address, phone, appear in the footer of a business scheduling page.
     *  @param string|null $value Value to set for the webSiteUrl property.
    */
    public function setWebSiteUrl(?string $value): void {
        $this->getBackingStore()->set('webSiteUrl', $value);
    }

}
