<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AiInteraction extends Entity implements Parsable 
{
    /**
     * Instantiates a new AiInteraction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AiInteraction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AiInteraction {
        return new AiInteraction();
    }

    /**
     * Gets the appClass property value. The data source for Copilot data. For example, IPM.SkypeTeams.Message.Copilot.Excel or IPM.SkypeTeams.Message.Copilot.Loop.
     * @return string|null
    */
    public function getAppClass(): ?string {
        $val = $this->getBackingStore()->get('appClass');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appClass'");
    }

    /**
     * Gets the attachments property value. The collection of documents attached to the interaction, such as cards and images.
     * @return array<AiInteractionAttachment>|null
    */
    public function getAttachments(): ?array {
        $val = $this->getBackingStore()->get('attachments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AiInteractionAttachment::class);
            /** @var array<AiInteractionAttachment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachments'");
    }

    /**
     * Gets the body property value. The body of the message, including the text of the body and its body type.
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        $val = $this->getBackingStore()->get('body');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'body'");
    }

    /**
     * Gets the contexts property value. The identifer that maps to all contexts associated with an interaction.
     * @return array<AiInteractionContext>|null
    */
    public function getContexts(): ?array {
        $val = $this->getBackingStore()->get('contexts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AiInteractionContext::class);
            /** @var array<AiInteractionContext>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contexts'");
    }

    /**
     * Gets the conversationType property value. The type of the conversation. For example, appchat or bizchat.
     * @return string|null
    */
    public function getConversationType(): ?string {
        $val = $this->getBackingStore()->get('conversationType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conversationType'");
    }

    /**
     * Gets the createdDateTime property value. The time when the interaction was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the etag property value. The timestamp of when the interaction was last modified.
     * @return string|null
    */
    public function getEtag(): ?string {
        $val = $this->getBackingStore()->get('etag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'etag'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appClass' => fn(ParseNode $n) => $o->setAppClass($n->getStringValue()),
            'attachments' => fn(ParseNode $n) => $o->setAttachments($n->getCollectionOfObjectValues([AiInteractionAttachment::class, 'createFromDiscriminatorValue'])),
            'body' => fn(ParseNode $n) => $o->setBody($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'contexts' => fn(ParseNode $n) => $o->setContexts($n->getCollectionOfObjectValues([AiInteractionContext::class, 'createFromDiscriminatorValue'])),
            'conversationType' => fn(ParseNode $n) => $o->setConversationType($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'etag' => fn(ParseNode $n) => $o->setEtag($n->getStringValue()),
            'from' => fn(ParseNode $n) => $o->setFrom($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'interactionType' => fn(ParseNode $n) => $o->setInteractionType($n->getEnumValue(AiInteractionType::class)),
            'links' => fn(ParseNode $n) => $o->setLinks($n->getCollectionOfObjectValues([AiInteractionLink::class, 'createFromDiscriminatorValue'])),
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getStringValue()),
            'mentions' => fn(ParseNode $n) => $o->setMentions($n->getCollectionOfObjectValues([AiInteractionMention::class, 'createFromDiscriminatorValue'])),
            'requestId' => fn(ParseNode $n) => $o->setRequestId($n->getStringValue()),
            'sessionId' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the from property value. The from property
     * @return IdentitySet|null
    */
    public function getFrom(): ?IdentitySet {
        $val = $this->getBackingStore()->get('from');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'from'");
    }

    /**
     * Gets the interactionType property value. The interactionType property
     * @return AiInteractionType|null
    */
    public function getInteractionType(): ?AiInteractionType {
        $val = $this->getBackingStore()->get('interactionType');
        if (is_null($val) || $val instanceof AiInteractionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'interactionType'");
    }

    /**
     * Gets the links property value. The collection of links that appear in the interaction.
     * @return array<AiInteractionLink>|null
    */
    public function getLinks(): ?array {
        $val = $this->getBackingStore()->get('links');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AiInteractionLink::class);
            /** @var array<AiInteractionLink>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'links'");
    }

    /**
     * Gets the locale property value. The locale of the sender.
     * @return string|null
    */
    public function getLocale(): ?string {
        $val = $this->getBackingStore()->get('locale');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locale'");
    }

    /**
     * Gets the mentions property value. The collection of the entities that were mentioned in the interaction, including users, bots, and so on.
     * @return array<AiInteractionMention>|null
    */
    public function getMentions(): ?array {
        $val = $this->getBackingStore()->get('mentions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AiInteractionMention::class);
            /** @var array<AiInteractionMention>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mentions'");
    }

    /**
     * Gets the requestId property value. The identifier that groups a user prompt with its Copilot response.
     * @return string|null
    */
    public function getRequestId(): ?string {
        $val = $this->getBackingStore()->get('requestId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestId'");
    }

    /**
     * Gets the sessionId property value. The thread ID or conversation identifier that maps to all Copilot sessions for the user.
     * @return string|null
    */
    public function getSessionId(): ?string {
        $val = $this->getBackingStore()->get('sessionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessionId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appClass', $this->getAppClass());
        $writer->writeCollectionOfObjectValues('attachments', $this->getAttachments());
        $writer->writeObjectValue('body', $this->getBody());
        $writer->writeCollectionOfObjectValues('contexts', $this->getContexts());
        $writer->writeStringValue('conversationType', $this->getConversationType());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('etag', $this->getEtag());
        $writer->writeObjectValue('from', $this->getFrom());
        $writer->writeEnumValue('interactionType', $this->getInteractionType());
        $writer->writeCollectionOfObjectValues('links', $this->getLinks());
        $writer->writeStringValue('locale', $this->getLocale());
        $writer->writeCollectionOfObjectValues('mentions', $this->getMentions());
        $writer->writeStringValue('requestId', $this->getRequestId());
        $writer->writeStringValue('sessionId', $this->getSessionId());
    }

    /**
     * Sets the appClass property value. The data source for Copilot data. For example, IPM.SkypeTeams.Message.Copilot.Excel or IPM.SkypeTeams.Message.Copilot.Loop.
     * @param string|null $value Value to set for the appClass property.
    */
    public function setAppClass(?string $value): void {
        $this->getBackingStore()->set('appClass', $value);
    }

    /**
     * Sets the attachments property value. The collection of documents attached to the interaction, such as cards and images.
     * @param array<AiInteractionAttachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value): void {
        $this->getBackingStore()->set('attachments', $value);
    }

    /**
     * Sets the body property value. The body of the message, including the text of the body and its body type.
     * @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value): void {
        $this->getBackingStore()->set('body', $value);
    }

    /**
     * Sets the contexts property value. The identifer that maps to all contexts associated with an interaction.
     * @param array<AiInteractionContext>|null $value Value to set for the contexts property.
    */
    public function setContexts(?array $value): void {
        $this->getBackingStore()->set('contexts', $value);
    }

    /**
     * Sets the conversationType property value. The type of the conversation. For example, appchat or bizchat.
     * @param string|null $value Value to set for the conversationType property.
    */
    public function setConversationType(?string $value): void {
        $this->getBackingStore()->set('conversationType', $value);
    }

    /**
     * Sets the createdDateTime property value. The time when the interaction was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the etag property value. The timestamp of when the interaction was last modified.
     * @param string|null $value Value to set for the etag property.
    */
    public function setEtag(?string $value): void {
        $this->getBackingStore()->set('etag', $value);
    }

    /**
     * Sets the from property value. The from property
     * @param IdentitySet|null $value Value to set for the from property.
    */
    public function setFrom(?IdentitySet $value): void {
        $this->getBackingStore()->set('from', $value);
    }

    /**
     * Sets the interactionType property value. The interactionType property
     * @param AiInteractionType|null $value Value to set for the interactionType property.
    */
    public function setInteractionType(?AiInteractionType $value): void {
        $this->getBackingStore()->set('interactionType', $value);
    }

    /**
     * Sets the links property value. The collection of links that appear in the interaction.
     * @param array<AiInteractionLink>|null $value Value to set for the links property.
    */
    public function setLinks(?array $value): void {
        $this->getBackingStore()->set('links', $value);
    }

    /**
     * Sets the locale property value. The locale of the sender.
     * @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value): void {
        $this->getBackingStore()->set('locale', $value);
    }

    /**
     * Sets the mentions property value. The collection of the entities that were mentioned in the interaction, including users, bots, and so on.
     * @param array<AiInteractionMention>|null $value Value to set for the mentions property.
    */
    public function setMentions(?array $value): void {
        $this->getBackingStore()->set('mentions', $value);
    }

    /**
     * Sets the requestId property value. The identifier that groups a user prompt with its Copilot response.
     * @param string|null $value Value to set for the requestId property.
    */
    public function setRequestId(?string $value): void {
        $this->getBackingStore()->set('requestId', $value);
    }

    /**
     * Sets the sessionId property value. The thread ID or conversation identifier that maps to all Copilot sessions for the user.
     * @param string|null $value Value to set for the sessionId property.
    */
    public function setSessionId(?string $value): void {
        $this->getBackingStore()->set('sessionId', $value);
    }

}
