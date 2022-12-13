<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AnalyzedMessageEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new AnalyzedMessageEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyzedMessageEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyzedMessageEvidence {
        return new AnalyzedMessageEvidence();
    }

    /**
     * Gets the antiSpamDirection property value. The antiSpamDirection property
     * @return string|null
    */
    public function getAntiSpamDirection(): ?string {
        return $this->getBackingStore()->get('antiSpamDirection');
    }

    /**
     * Gets the attachmentsCount property value. The attachmentsCount property
     * @return int|null
    */
    public function getAttachmentsCount(): ?int {
        return $this->getBackingStore()->get('attachmentsCount');
    }

    /**
     * Gets the deliveryAction property value. The deliveryAction property
     * @return string|null
    */
    public function getDeliveryAction(): ?string {
        return $this->getBackingStore()->get('deliveryAction');
    }

    /**
     * Gets the deliveryLocation property value. The deliveryLocation property
     * @return string|null
    */
    public function getDeliveryLocation(): ?string {
        return $this->getBackingStore()->get('deliveryLocation');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'antiSpamDirection' => fn(ParseNode $n) => $o->setAntiSpamDirection($n->getStringValue()),
            'attachmentsCount' => fn(ParseNode $n) => $o->setAttachmentsCount($n->getIntegerValue()),
            'deliveryAction' => fn(ParseNode $n) => $o->setDeliveryAction($n->getStringValue()),
            'deliveryLocation' => fn(ParseNode $n) => $o->setDeliveryLocation($n->getStringValue()),
            'internetMessageId' => fn(ParseNode $n) => $o->setInternetMessageId($n->getStringValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            'networkMessageId' => fn(ParseNode $n) => $o->setNetworkMessageId($n->getStringValue()),
            'p1Sender' => fn(ParseNode $n) => $o->setP1Sender($n->getObjectValue([EmailSender::class, 'createFromDiscriminatorValue'])),
            'p2Sender' => fn(ParseNode $n) => $o->setP2Sender($n->getObjectValue([EmailSender::class, 'createFromDiscriminatorValue'])),
            'receivedDateTime' => fn(ParseNode $n) => $o->setReceivedDateTime($n->getDateTimeValue()),
            'recipientEmailAddress' => fn(ParseNode $n) => $o->setRecipientEmailAddress($n->getStringValue()),
            'senderIp' => fn(ParseNode $n) => $o->setSenderIp($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'threatDetectionMethods' => fn(ParseNode $n) => $o->setThreatDetectionMethods($n->getCollectionOfPrimitiveValues()),
            'threats' => fn(ParseNode $n) => $o->setThreats($n->getCollectionOfPrimitiveValues()),
            'urlCount' => fn(ParseNode $n) => $o->setUrlCount($n->getIntegerValue()),
            'urls' => fn(ParseNode $n) => $o->setUrls($n->getCollectionOfPrimitiveValues()),
            'urn' => fn(ParseNode $n) => $o->setUrn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the internetMessageId property value. The internetMessageId property
     * @return string|null
    */
    public function getInternetMessageId(): ?string {
        return $this->getBackingStore()->get('internetMessageId');
    }

    /**
     * Gets the language property value. The language property
     * @return string|null
    */
    public function getLanguage(): ?string {
        return $this->getBackingStore()->get('language');
    }

    /**
     * Gets the networkMessageId property value. The networkMessageId property
     * @return string|null
    */
    public function getNetworkMessageId(): ?string {
        return $this->getBackingStore()->get('networkMessageId');
    }

    /**
     * Gets the p1Sender property value. The p1Sender property
     * @return EmailSender|null
    */
    public function getP1Sender(): ?EmailSender {
        return $this->getBackingStore()->get('p1Sender');
    }

    /**
     * Gets the p2Sender property value. The p2Sender property
     * @return EmailSender|null
    */
    public function getP2Sender(): ?EmailSender {
        return $this->getBackingStore()->get('p2Sender');
    }

    /**
     * Gets the receivedDateTime property value. The receivedDateTime property
     * @return DateTime|null
    */
    public function getReceivedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('receivedDateTime');
    }

    /**
     * Gets the recipientEmailAddress property value. The recipientEmailAddress property
     * @return string|null
    */
    public function getRecipientEmailAddress(): ?string {
        return $this->getBackingStore()->get('recipientEmailAddress');
    }

    /**
     * Gets the senderIp property value. The senderIp property
     * @return string|null
    */
    public function getSenderIp(): ?string {
        return $this->getBackingStore()->get('senderIp');
    }

    /**
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->getBackingStore()->get('subject');
    }

    /**
     * Gets the threatDetectionMethods property value. The threatDetectionMethods property
     * @return array<string>|null
    */
    public function getThreatDetectionMethods(): ?array {
        return $this->getBackingStore()->get('threatDetectionMethods');
    }

    /**
     * Gets the threats property value. The threats property
     * @return array<string>|null
    */
    public function getThreats(): ?array {
        return $this->getBackingStore()->get('threats');
    }

    /**
     * Gets the urlCount property value. The urlCount property
     * @return int|null
    */
    public function getUrlCount(): ?int {
        return $this->getBackingStore()->get('urlCount');
    }

    /**
     * Gets the urls property value. The urls property
     * @return array<string>|null
    */
    public function getUrls(): ?array {
        return $this->getBackingStore()->get('urls');
    }

    /**
     * Gets the urn property value. The urn property
     * @return string|null
    */
    public function getUrn(): ?string {
        return $this->getBackingStore()->get('urn');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('antiSpamDirection', $this->getAntiSpamDirection());
        $writer->writeIntegerValue('attachmentsCount', $this->getAttachmentsCount());
        $writer->writeStringValue('deliveryAction', $this->getDeliveryAction());
        $writer->writeStringValue('deliveryLocation', $this->getDeliveryLocation());
        $writer->writeStringValue('internetMessageId', $this->getInternetMessageId());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeStringValue('networkMessageId', $this->getNetworkMessageId());
        $writer->writeObjectValue('p1Sender', $this->getP1Sender());
        $writer->writeObjectValue('p2Sender', $this->getP2Sender());
        $writer->writeDateTimeValue('receivedDateTime', $this->getReceivedDateTime());
        $writer->writeStringValue('recipientEmailAddress', $this->getRecipientEmailAddress());
        $writer->writeStringValue('senderIp', $this->getSenderIp());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeCollectionOfPrimitiveValues('threatDetectionMethods', $this->getThreatDetectionMethods());
        $writer->writeCollectionOfPrimitiveValues('threats', $this->getThreats());
        $writer->writeIntegerValue('urlCount', $this->getUrlCount());
        $writer->writeCollectionOfPrimitiveValues('urls', $this->getUrls());
        $writer->writeStringValue('urn', $this->getUrn());
    }

    /**
     * Sets the antiSpamDirection property value. The antiSpamDirection property
     *  @param string|null $value Value to set for the antiSpamDirection property.
    */
    public function setAntiSpamDirection(?string $value): void {
        $this->getBackingStore()->set('antiSpamDirection', $value);
    }

    /**
     * Sets the attachmentsCount property value. The attachmentsCount property
     *  @param int|null $value Value to set for the attachmentsCount property.
    */
    public function setAttachmentsCount(?int $value): void {
        $this->getBackingStore()->set('attachmentsCount', $value);
    }

    /**
     * Sets the deliveryAction property value. The deliveryAction property
     *  @param string|null $value Value to set for the deliveryAction property.
    */
    public function setDeliveryAction(?string $value): void {
        $this->getBackingStore()->set('deliveryAction', $value);
    }

    /**
     * Sets the deliveryLocation property value. The deliveryLocation property
     *  @param string|null $value Value to set for the deliveryLocation property.
    */
    public function setDeliveryLocation(?string $value): void {
        $this->getBackingStore()->set('deliveryLocation', $value);
    }

    /**
     * Sets the internetMessageId property value. The internetMessageId property
     *  @param string|null $value Value to set for the internetMessageId property.
    */
    public function setInternetMessageId(?string $value): void {
        $this->getBackingStore()->set('internetMessageId', $value);
    }

    /**
     * Sets the language property value. The language property
     *  @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->getBackingStore()->set('language', $value);
    }

    /**
     * Sets the networkMessageId property value. The networkMessageId property
     *  @param string|null $value Value to set for the networkMessageId property.
    */
    public function setNetworkMessageId(?string $value): void {
        $this->getBackingStore()->set('networkMessageId', $value);
    }

    /**
     * Sets the p1Sender property value. The p1Sender property
     *  @param EmailSender|null $value Value to set for the p1Sender property.
    */
    public function setP1Sender(?EmailSender $value): void {
        $this->getBackingStore()->set('p1Sender', $value);
    }

    /**
     * Sets the p2Sender property value. The p2Sender property
     *  @param EmailSender|null $value Value to set for the p2Sender property.
    */
    public function setP2Sender(?EmailSender $value): void {
        $this->getBackingStore()->set('p2Sender', $value);
    }

    /**
     * Sets the receivedDateTime property value. The receivedDateTime property
     *  @param DateTime|null $value Value to set for the receivedDateTime property.
    */
    public function setReceivedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('receivedDateTime', $value);
    }

    /**
     * Sets the recipientEmailAddress property value. The recipientEmailAddress property
     *  @param string|null $value Value to set for the recipientEmailAddress property.
    */
    public function setRecipientEmailAddress(?string $value): void {
        $this->getBackingStore()->set('recipientEmailAddress', $value);
    }

    /**
     * Sets the senderIp property value. The senderIp property
     *  @param string|null $value Value to set for the senderIp property.
    */
    public function setSenderIp(?string $value): void {
        $this->getBackingStore()->set('senderIp', $value);
    }

    /**
     * Sets the subject property value. The subject property
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the threatDetectionMethods property value. The threatDetectionMethods property
     *  @param array<string>|null $value Value to set for the threatDetectionMethods property.
    */
    public function setThreatDetectionMethods(?array $value): void {
        $this->getBackingStore()->set('threatDetectionMethods', $value);
    }

    /**
     * Sets the threats property value. The threats property
     *  @param array<string>|null $value Value to set for the threats property.
    */
    public function setThreats(?array $value): void {
        $this->getBackingStore()->set('threats', $value);
    }

    /**
     * Sets the urlCount property value. The urlCount property
     *  @param int|null $value Value to set for the urlCount property.
    */
    public function setUrlCount(?int $value): void {
        $this->getBackingStore()->set('urlCount', $value);
    }

    /**
     * Sets the urls property value. The urls property
     *  @param array<string>|null $value Value to set for the urls property.
    */
    public function setUrls(?array $value): void {
        $this->getBackingStore()->set('urls', $value);
    }

    /**
     * Sets the urn property value. The urn property
     *  @param string|null $value Value to set for the urn property.
    */
    public function setUrn(?string $value): void {
        $this->getBackingStore()->set('urn', $value);
    }

}
