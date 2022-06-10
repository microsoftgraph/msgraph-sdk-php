<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsFirewallNetworkProfile implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $authorizedApplicationRulesFromGroupPolicyMerged Configures the firewall to merge authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority.
    */
    private ?bool $authorizedApplicationRulesFromGroupPolicyMerged = null;
    
    /**
     * @var bool|null $connectionSecurityRulesFromGroupPolicyMerged Configures the firewall to merge connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority.
    */
    private ?bool $connectionSecurityRulesFromGroupPolicyMerged = null;
    
    /**
     * @var StateManagementSetting|null $firewallEnabled Configures the host device to allow or block the firewall and advanced security enforcement for the network profile. Possible values are: notConfigured, blocked, allowed.
    */
    private ?StateManagementSetting $firewallEnabled = null;
    
    /**
     * @var bool|null $globalPortRulesFromGroupPolicyMerged Configures the firewall to merge global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority.
    */
    private ?bool $globalPortRulesFromGroupPolicyMerged = null;
    
    /**
     * @var bool|null $inboundConnectionsBlocked Configures the firewall to block all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority.
    */
    private ?bool $inboundConnectionsBlocked = null;
    
    /**
     * @var bool|null $inboundNotificationsBlocked Prevents the firewall from displaying notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority.
    */
    private ?bool $inboundNotificationsBlocked = null;
    
    /**
     * @var bool|null $incomingTrafficBlocked Configures the firewall to block all incoming traffic regardless of other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority.
    */
    private ?bool $incomingTrafficBlocked = null;
    
    /**
     * @var bool|null $outboundConnectionsBlocked Configures the firewall to block all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above.
    */
    private ?bool $outboundConnectionsBlocked = null;
    
    /**
     * @var bool|null $policyRulesFromGroupPolicyMerged Configures the firewall to merge Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority.
    */
    private ?bool $policyRulesFromGroupPolicyMerged = null;
    
    /**
     * @var bool|null $securedPacketExemptionAllowed Configures the firewall to allow the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority.
    */
    private ?bool $securedPacketExemptionAllowed = null;
    
    /**
     * @var bool|null $stealthModeBlocked Prevent the server from operating in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority.
    */
    private ?bool $stealthModeBlocked = null;
    
    /**
     * @var bool|null $unicastResponsesToMulticastBroadcastsBlocked Configures the firewall to block unicast responses to multicast broadcast traffic. When UnicastResponsesToMulticastBroadcastsRequired and UnicastResponsesToMulticastBroadcastsBlocked are both true, UnicastResponsesToMulticastBroadcastsBlocked takes priority.
    */
    private ?bool $unicastResponsesToMulticastBroadcastsBlocked = null;
    
    /**
     * Instantiates a new windowsFirewallNetworkProfile and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsFirewallNetworkProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsFirewallNetworkProfile {
        return new WindowsFirewallNetworkProfile();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the authorizedApplicationRulesFromGroupPolicyMerged property value. Configures the firewall to merge authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getAuthorizedApplicationRulesFromGroupPolicyMerged(): ?bool {
        return $this->authorizedApplicationRulesFromGroupPolicyMerged;
    }

    /**
     * Gets the connectionSecurityRulesFromGroupPolicyMerged property value. Configures the firewall to merge connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getConnectionSecurityRulesFromGroupPolicyMerged(): ?bool {
        return $this->connectionSecurityRulesFromGroupPolicyMerged;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authorizedApplicationRulesFromGroupPolicyMerged' => function (ParseNode $n) use ($o) { $o->setAuthorizedApplicationRulesFromGroupPolicyMerged($n->getBooleanValue()); },
            'connectionSecurityRulesFromGroupPolicyMerged' => function (ParseNode $n) use ($o) { $o->setConnectionSecurityRulesFromGroupPolicyMerged($n->getBooleanValue()); },
            'firewallEnabled' => function (ParseNode $n) use ($o) { $o->setFirewallEnabled($n->getEnumValue(StateManagementSetting::class)); },
            'globalPortRulesFromGroupPolicyMerged' => function (ParseNode $n) use ($o) { $o->setGlobalPortRulesFromGroupPolicyMerged($n->getBooleanValue()); },
            'inboundConnectionsBlocked' => function (ParseNode $n) use ($o) { $o->setInboundConnectionsBlocked($n->getBooleanValue()); },
            'inboundNotificationsBlocked' => function (ParseNode $n) use ($o) { $o->setInboundNotificationsBlocked($n->getBooleanValue()); },
            'incomingTrafficBlocked' => function (ParseNode $n) use ($o) { $o->setIncomingTrafficBlocked($n->getBooleanValue()); },
            'outboundConnectionsBlocked' => function (ParseNode $n) use ($o) { $o->setOutboundConnectionsBlocked($n->getBooleanValue()); },
            'policyRulesFromGroupPolicyMerged' => function (ParseNode $n) use ($o) { $o->setPolicyRulesFromGroupPolicyMerged($n->getBooleanValue()); },
            'securedPacketExemptionAllowed' => function (ParseNode $n) use ($o) { $o->setSecuredPacketExemptionAllowed($n->getBooleanValue()); },
            'stealthModeBlocked' => function (ParseNode $n) use ($o) { $o->setStealthModeBlocked($n->getBooleanValue()); },
            'unicastResponsesToMulticastBroadcastsBlocked' => function (ParseNode $n) use ($o) { $o->setUnicastResponsesToMulticastBroadcastsBlocked($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the firewallEnabled property value. Configures the host device to allow or block the firewall and advanced security enforcement for the network profile. Possible values are: notConfigured, blocked, allowed.
     * @return StateManagementSetting|null
    */
    public function getFirewallEnabled(): ?StateManagementSetting {
        return $this->firewallEnabled;
    }

    /**
     * Gets the globalPortRulesFromGroupPolicyMerged property value. Configures the firewall to merge global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getGlobalPortRulesFromGroupPolicyMerged(): ?bool {
        return $this->globalPortRulesFromGroupPolicyMerged;
    }

    /**
     * Gets the inboundConnectionsBlocked property value. Configures the firewall to block all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority.
     * @return bool|null
    */
    public function getInboundConnectionsBlocked(): ?bool {
        return $this->inboundConnectionsBlocked;
    }

    /**
     * Gets the inboundNotificationsBlocked property value. Prevents the firewall from displaying notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority.
     * @return bool|null
    */
    public function getInboundNotificationsBlocked(): ?bool {
        return $this->inboundNotificationsBlocked;
    }

    /**
     * Gets the incomingTrafficBlocked property value. Configures the firewall to block all incoming traffic regardless of other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority.
     * @return bool|null
    */
    public function getIncomingTrafficBlocked(): ?bool {
        return $this->incomingTrafficBlocked;
    }

    /**
     * Gets the outboundConnectionsBlocked property value. Configures the firewall to block all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above.
     * @return bool|null
    */
    public function getOutboundConnectionsBlocked(): ?bool {
        return $this->outboundConnectionsBlocked;
    }

    /**
     * Gets the policyRulesFromGroupPolicyMerged property value. Configures the firewall to merge Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getPolicyRulesFromGroupPolicyMerged(): ?bool {
        return $this->policyRulesFromGroupPolicyMerged;
    }

    /**
     * Gets the securedPacketExemptionAllowed property value. Configures the firewall to allow the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority.
     * @return bool|null
    */
    public function getSecuredPacketExemptionAllowed(): ?bool {
        return $this->securedPacketExemptionAllowed;
    }

    /**
     * Gets the stealthModeBlocked property value. Prevent the server from operating in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority.
     * @return bool|null
    */
    public function getStealthModeBlocked(): ?bool {
        return $this->stealthModeBlocked;
    }

    /**
     * Gets the unicastResponsesToMulticastBroadcastsBlocked property value. Configures the firewall to block unicast responses to multicast broadcast traffic. When UnicastResponsesToMulticastBroadcastsRequired and UnicastResponsesToMulticastBroadcastsBlocked are both true, UnicastResponsesToMulticastBroadcastsBlocked takes priority.
     * @return bool|null
    */
    public function getUnicastResponsesToMulticastBroadcastsBlocked(): ?bool {
        return $this->unicastResponsesToMulticastBroadcastsBlocked;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('authorizedApplicationRulesFromGroupPolicyMerged', $this->authorizedApplicationRulesFromGroupPolicyMerged);
        $writer->writeBooleanValue('connectionSecurityRulesFromGroupPolicyMerged', $this->connectionSecurityRulesFromGroupPolicyMerged);
        $writer->writeEnumValue('firewallEnabled', $this->firewallEnabled);
        $writer->writeBooleanValue('globalPortRulesFromGroupPolicyMerged', $this->globalPortRulesFromGroupPolicyMerged);
        $writer->writeBooleanValue('inboundConnectionsBlocked', $this->inboundConnectionsBlocked);
        $writer->writeBooleanValue('inboundNotificationsBlocked', $this->inboundNotificationsBlocked);
        $writer->writeBooleanValue('incomingTrafficBlocked', $this->incomingTrafficBlocked);
        $writer->writeBooleanValue('outboundConnectionsBlocked', $this->outboundConnectionsBlocked);
        $writer->writeBooleanValue('policyRulesFromGroupPolicyMerged', $this->policyRulesFromGroupPolicyMerged);
        $writer->writeBooleanValue('securedPacketExemptionAllowed', $this->securedPacketExemptionAllowed);
        $writer->writeBooleanValue('stealthModeBlocked', $this->stealthModeBlocked);
        $writer->writeBooleanValue('unicastResponsesToMulticastBroadcastsBlocked', $this->unicastResponsesToMulticastBroadcastsBlocked);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the authorizedApplicationRulesFromGroupPolicyMerged property value. Configures the firewall to merge authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority.
     *  @param bool|null $value Value to set for the authorizedApplicationRulesFromGroupPolicyMerged property.
    */
    public function setAuthorizedApplicationRulesFromGroupPolicyMerged(?bool $value ): void {
        $this->authorizedApplicationRulesFromGroupPolicyMerged = $value;
    }

    /**
     * Sets the connectionSecurityRulesFromGroupPolicyMerged property value. Configures the firewall to merge connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority.
     *  @param bool|null $value Value to set for the connectionSecurityRulesFromGroupPolicyMerged property.
    */
    public function setConnectionSecurityRulesFromGroupPolicyMerged(?bool $value ): void {
        $this->connectionSecurityRulesFromGroupPolicyMerged = $value;
    }

    /**
     * Sets the firewallEnabled property value. Configures the host device to allow or block the firewall and advanced security enforcement for the network profile. Possible values are: notConfigured, blocked, allowed.
     *  @param StateManagementSetting|null $value Value to set for the firewallEnabled property.
    */
    public function setFirewallEnabled(?StateManagementSetting $value ): void {
        $this->firewallEnabled = $value;
    }

    /**
     * Sets the globalPortRulesFromGroupPolicyMerged property value. Configures the firewall to merge global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority.
     *  @param bool|null $value Value to set for the globalPortRulesFromGroupPolicyMerged property.
    */
    public function setGlobalPortRulesFromGroupPolicyMerged(?bool $value ): void {
        $this->globalPortRulesFromGroupPolicyMerged = $value;
    }

    /**
     * Sets the inboundConnectionsBlocked property value. Configures the firewall to block all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority.
     *  @param bool|null $value Value to set for the inboundConnectionsBlocked property.
    */
    public function setInboundConnectionsBlocked(?bool $value ): void {
        $this->inboundConnectionsBlocked = $value;
    }

    /**
     * Sets the inboundNotificationsBlocked property value. Prevents the firewall from displaying notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority.
     *  @param bool|null $value Value to set for the inboundNotificationsBlocked property.
    */
    public function setInboundNotificationsBlocked(?bool $value ): void {
        $this->inboundNotificationsBlocked = $value;
    }

    /**
     * Sets the incomingTrafficBlocked property value. Configures the firewall to block all incoming traffic regardless of other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority.
     *  @param bool|null $value Value to set for the incomingTrafficBlocked property.
    */
    public function setIncomingTrafficBlocked(?bool $value ): void {
        $this->incomingTrafficBlocked = $value;
    }

    /**
     * Sets the outboundConnectionsBlocked property value. Configures the firewall to block all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above.
     *  @param bool|null $value Value to set for the outboundConnectionsBlocked property.
    */
    public function setOutboundConnectionsBlocked(?bool $value ): void {
        $this->outboundConnectionsBlocked = $value;
    }

    /**
     * Sets the policyRulesFromGroupPolicyMerged property value. Configures the firewall to merge Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority.
     *  @param bool|null $value Value to set for the policyRulesFromGroupPolicyMerged property.
    */
    public function setPolicyRulesFromGroupPolicyMerged(?bool $value ): void {
        $this->policyRulesFromGroupPolicyMerged = $value;
    }

    /**
     * Sets the securedPacketExemptionAllowed property value. Configures the firewall to allow the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority.
     *  @param bool|null $value Value to set for the securedPacketExemptionAllowed property.
    */
    public function setSecuredPacketExemptionAllowed(?bool $value ): void {
        $this->securedPacketExemptionAllowed = $value;
    }

    /**
     * Sets the stealthModeBlocked property value. Prevent the server from operating in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority.
     *  @param bool|null $value Value to set for the stealthModeBlocked property.
    */
    public function setStealthModeBlocked(?bool $value ): void {
        $this->stealthModeBlocked = $value;
    }

    /**
     * Sets the unicastResponsesToMulticastBroadcastsBlocked property value. Configures the firewall to block unicast responses to multicast broadcast traffic. When UnicastResponsesToMulticastBroadcastsRequired and UnicastResponsesToMulticastBroadcastsBlocked are both true, UnicastResponsesToMulticastBroadcastsBlocked takes priority.
     *  @param bool|null $value Value to set for the unicastResponsesToMulticastBroadcastsBlocked property.
    */
    public function setUnicastResponsesToMulticastBroadcastsBlocked(?bool $value ): void {
        $this->unicastResponsesToMulticastBroadcastsBlocked = $value;
    }

}
