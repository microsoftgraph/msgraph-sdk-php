<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewNotificationRecipientQueryScope extends AccessReviewNotificationRecipientScope implements Parsable 
{
    /**
     * @var string|null $query Represents the query for who the recipients are. For example, /groups/{group id}/members for group members and /users/{user id} for a specific user.
    */
    private ?string $query = null;
    
    /**
     * @var string|null $queryRoot In the scenario where reviewers need to be specified dynamically, indicates the relative source of the query. This property is only required if a relative query (that is, ./manager) is specified.
    */
    private ?string $queryRoot = null;
    
    /**
     * @var string|null $queryType Indicates the type of query. Allowed value is MicrosoftGraph.
    */
    private ?string $queryType = null;
    
    /**
     * Instantiates a new AccessReviewNotificationRecipientQueryScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewNotificationRecipientQueryScope');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewNotificationRecipientQueryScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewNotificationRecipientQueryScope {
        return new AccessReviewNotificationRecipientQueryScope();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'query' => function (ParseNode $n) use ($o) { $o->setQuery($n->getStringValue()); },
            'queryRoot' => function (ParseNode $n) use ($o) { $o->setQueryRoot($n->getStringValue()); },
            'queryType' => function (ParseNode $n) use ($o) { $o->setQueryType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the query property value. Represents the query for who the recipients are. For example, /groups/{group id}/members for group members and /users/{user id} for a specific user.
     * @return string|null
    */
    public function getQuery(): ?string {
        return $this->query;
    }

    /**
     * Gets the queryRoot property value. In the scenario where reviewers need to be specified dynamically, indicates the relative source of the query. This property is only required if a relative query (that is, ./manager) is specified.
     * @return string|null
    */
    public function getQueryRoot(): ?string {
        return $this->queryRoot;
    }

    /**
     * Gets the queryType property value. Indicates the type of query. Allowed value is MicrosoftGraph.
     * @return string|null
    */
    public function getQueryType(): ?string {
        return $this->queryType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('query', $this->query);
        $writer->writeStringValue('queryRoot', $this->queryRoot);
        $writer->writeStringValue('queryType', $this->queryType);
    }

    /**
     * Sets the query property value. Represents the query for who the recipients are. For example, /groups/{group id}/members for group members and /users/{user id} for a specific user.
     *  @param string|null $value Value to set for the query property.
    */
    public function setQuery(?string $value ): void {
        $this->query = $value;
    }

    /**
     * Sets the queryRoot property value. In the scenario where reviewers need to be specified dynamically, indicates the relative source of the query. This property is only required if a relative query (that is, ./manager) is specified.
     *  @param string|null $value Value to set for the queryRoot property.
    */
    public function setQueryRoot(?string $value ): void {
        $this->queryRoot = $value;
    }

    /**
     * Sets the queryType property value. Indicates the type of query. Allowed value is MicrosoftGraph.
     *  @param string|null $value Value to set for the queryType property.
    */
    public function setQueryType(?string $value ): void {
        $this->queryType = $value;
    }

}
