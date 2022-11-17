<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class Windows10EndpointProtectionConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new Windows10EndpointProtectionConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10EndpointProtectionConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10EndpointProtectionConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10EndpointProtectionConfiguration {
        return new Windows10EndpointProtectionConfiguration();
    }

    /**
     * Gets the applicationGuardAllowPersistence property value. Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.)
     * @return bool|null
    */
    public function getApplicationGuardAllowPersistence(): ?bool {
        return $this->getBackingStore()->get('applicationGuardAllowPersistence');
    }

    /**
     * Gets the applicationGuardAllowPrintToLocalPrinters property value. Allow printing to Local Printers from Container
     * @return bool|null
    */
    public function getApplicationGuardAllowPrintToLocalPrinters(): ?bool {
        return $this->getBackingStore()->get('applicationGuardAllowPrintToLocalPrinters');
    }

    /**
     * Gets the applicationGuardAllowPrintToNetworkPrinters property value. Allow printing to Network Printers from Container
     * @return bool|null
    */
    public function getApplicationGuardAllowPrintToNetworkPrinters(): ?bool {
        return $this->getBackingStore()->get('applicationGuardAllowPrintToNetworkPrinters');
    }

    /**
     * Gets the applicationGuardAllowPrintToPDF property value. Allow printing to PDF from Container
     * @return bool|null
    */
    public function getApplicationGuardAllowPrintToPDF(): ?bool {
        return $this->getBackingStore()->get('applicationGuardAllowPrintToPDF');
    }

    /**
     * Gets the applicationGuardAllowPrintToXPS property value. Allow printing to XPS from Container
     * @return bool|null
    */
    public function getApplicationGuardAllowPrintToXPS(): ?bool {
        return $this->getBackingStore()->get('applicationGuardAllowPrintToXPS');
    }

    /**
     * Gets the applicationGuardBlockClipboardSharing property value. Possible values for applicationGuardBlockClipboardSharingType
     * @return ApplicationGuardBlockClipboardSharingType|null
    */
    public function getApplicationGuardBlockClipboardSharing(): ?ApplicationGuardBlockClipboardSharingType {
        return $this->getBackingStore()->get('applicationGuardBlockClipboardSharing');
    }

    /**
     * Gets the applicationGuardBlockFileTransfer property value. Possible values for applicationGuardBlockFileTransfer
     * @return ApplicationGuardBlockFileTransferType|null
    */
    public function getApplicationGuardBlockFileTransfer(): ?ApplicationGuardBlockFileTransferType {
        return $this->getBackingStore()->get('applicationGuardBlockFileTransfer');
    }

    /**
     * Gets the applicationGuardBlockNonEnterpriseContent property value. Block enterprise sites to load non-enterprise content, such as third party plug-ins
     * @return bool|null
    */
    public function getApplicationGuardBlockNonEnterpriseContent(): ?bool {
        return $this->getBackingStore()->get('applicationGuardBlockNonEnterpriseContent');
    }

    /**
     * Gets the applicationGuardEnabled property value. Enable Windows Defender Application Guard
     * @return bool|null
    */
    public function getApplicationGuardEnabled(): ?bool {
        return $this->getBackingStore()->get('applicationGuardEnabled');
    }

    /**
     * Gets the applicationGuardForceAuditing property value. Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.)
     * @return bool|null
    */
    public function getApplicationGuardForceAuditing(): ?bool {
        return $this->getBackingStore()->get('applicationGuardForceAuditing');
    }

    /**
     * Gets the appLockerApplicationControl property value. Possible values of AppLocker Application Control Types
     * @return AppLockerApplicationControlType|null
    */
    public function getAppLockerApplicationControl(): ?AppLockerApplicationControlType {
        return $this->getBackingStore()->get('appLockerApplicationControl');
    }

    /**
     * Gets the bitLockerDisableWarningForOtherDiskEncryption property value. Allows the Admin to disable the warning prompt for other disk encryption on the user machines.
     * @return bool|null
    */
    public function getBitLockerDisableWarningForOtherDiskEncryption(): ?bool {
        return $this->getBackingStore()->get('bitLockerDisableWarningForOtherDiskEncryption');
    }

    /**
     * Gets the bitLockerEnableStorageCardEncryptionOnMobile property value. Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU.
     * @return bool|null
    */
    public function getBitLockerEnableStorageCardEncryptionOnMobile(): ?bool {
        return $this->getBackingStore()->get('bitLockerEnableStorageCardEncryptionOnMobile');
    }

    /**
     * Gets the bitLockerEncryptDevice property value. Allows the admin to require encryption to be turned on using BitLocker.
     * @return bool|null
    */
    public function getBitLockerEncryptDevice(): ?bool {
        return $this->getBackingStore()->get('bitLockerEncryptDevice');
    }

    /**
     * Gets the bitLockerRemovableDrivePolicy property value. BitLocker Removable Drive Policy.
     * @return BitLockerRemovableDrivePolicy|null
    */
    public function getBitLockerRemovableDrivePolicy(): ?BitLockerRemovableDrivePolicy {
        return $this->getBackingStore()->get('bitLockerRemovableDrivePolicy');
    }

    /**
     * Gets the defenderAdditionalGuardedFolders property value. List of folder paths to be added to the list of protected folders
     * @return array<string>|null
    */
    public function getDefenderAdditionalGuardedFolders(): ?array {
        return $this->getBackingStore()->get('defenderAdditionalGuardedFolders');
    }

    /**
     * Gets the defenderAttackSurfaceReductionExcludedPaths property value. List of exe files and folders to be excluded from attack surface reduction rules
     * @return array<string>|null
    */
    public function getDefenderAttackSurfaceReductionExcludedPaths(): ?array {
        return $this->getBackingStore()->get('defenderAttackSurfaceReductionExcludedPaths');
    }

    /**
     * Gets the defenderExploitProtectionXml property value. Xml content containing information regarding exploit protection details.
     * @return StreamInterface|null
    */
    public function getDefenderExploitProtectionXml(): ?StreamInterface {
        return $this->getBackingStore()->get('defenderExploitProtectionXml');
    }

    /**
     * Gets the defenderExploitProtectionXmlFileName property value. Name of the file from which DefenderExploitProtectionXml was obtained.
     * @return string|null
    */
    public function getDefenderExploitProtectionXmlFileName(): ?string {
        return $this->getBackingStore()->get('defenderExploitProtectionXmlFileName');
    }

    /**
     * Gets the defenderGuardedFoldersAllowedAppPaths property value. List of paths to exe that are allowed to access protected folders
     * @return array<string>|null
    */
    public function getDefenderGuardedFoldersAllowedAppPaths(): ?array {
        return $this->getBackingStore()->get('defenderGuardedFoldersAllowedAppPaths');
    }

    /**
     * Gets the defenderSecurityCenterBlockExploitProtectionOverride property value. Indicates whether or not to block user from overriding Exploit Protection settings.
     * @return bool|null
    */
    public function getDefenderSecurityCenterBlockExploitProtectionOverride(): ?bool {
        return $this->getBackingStore()->get('defenderSecurityCenterBlockExploitProtectionOverride');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationGuardAllowPersistence' => fn(ParseNode $n) => $o->setApplicationGuardAllowPersistence($n->getBooleanValue()),
            'applicationGuardAllowPrintToLocalPrinters' => fn(ParseNode $n) => $o->setApplicationGuardAllowPrintToLocalPrinters($n->getBooleanValue()),
            'applicationGuardAllowPrintToNetworkPrinters' => fn(ParseNode $n) => $o->setApplicationGuardAllowPrintToNetworkPrinters($n->getBooleanValue()),
            'applicationGuardAllowPrintToPDF' => fn(ParseNode $n) => $o->setApplicationGuardAllowPrintToPDF($n->getBooleanValue()),
            'applicationGuardAllowPrintToXPS' => fn(ParseNode $n) => $o->setApplicationGuardAllowPrintToXPS($n->getBooleanValue()),
            'applicationGuardBlockClipboardSharing' => fn(ParseNode $n) => $o->setApplicationGuardBlockClipboardSharing($n->getEnumValue(ApplicationGuardBlockClipboardSharingType::class)),
            'applicationGuardBlockFileTransfer' => fn(ParseNode $n) => $o->setApplicationGuardBlockFileTransfer($n->getEnumValue(ApplicationGuardBlockFileTransferType::class)),
            'applicationGuardBlockNonEnterpriseContent' => fn(ParseNode $n) => $o->setApplicationGuardBlockNonEnterpriseContent($n->getBooleanValue()),
            'applicationGuardEnabled' => fn(ParseNode $n) => $o->setApplicationGuardEnabled($n->getBooleanValue()),
            'applicationGuardForceAuditing' => fn(ParseNode $n) => $o->setApplicationGuardForceAuditing($n->getBooleanValue()),
            'appLockerApplicationControl' => fn(ParseNode $n) => $o->setAppLockerApplicationControl($n->getEnumValue(AppLockerApplicationControlType::class)),
            'bitLockerDisableWarningForOtherDiskEncryption' => fn(ParseNode $n) => $o->setBitLockerDisableWarningForOtherDiskEncryption($n->getBooleanValue()),
            'bitLockerEnableStorageCardEncryptionOnMobile' => fn(ParseNode $n) => $o->setBitLockerEnableStorageCardEncryptionOnMobile($n->getBooleanValue()),
            'bitLockerEncryptDevice' => fn(ParseNode $n) => $o->setBitLockerEncryptDevice($n->getBooleanValue()),
            'bitLockerRemovableDrivePolicy' => fn(ParseNode $n) => $o->setBitLockerRemovableDrivePolicy($n->getObjectValue([BitLockerRemovableDrivePolicy::class, 'createFromDiscriminatorValue'])),
            'defenderAdditionalGuardedFolders' => fn(ParseNode $n) => $o->setDefenderAdditionalGuardedFolders($n->getCollectionOfPrimitiveValues()),
            'defenderAttackSurfaceReductionExcludedPaths' => fn(ParseNode $n) => $o->setDefenderAttackSurfaceReductionExcludedPaths($n->getCollectionOfPrimitiveValues()),
            'defenderExploitProtectionXml' => fn(ParseNode $n) => $o->setDefenderExploitProtectionXml($n->getBinaryContent()),
            'defenderExploitProtectionXmlFileName' => fn(ParseNode $n) => $o->setDefenderExploitProtectionXmlFileName($n->getStringValue()),
            'defenderGuardedFoldersAllowedAppPaths' => fn(ParseNode $n) => $o->setDefenderGuardedFoldersAllowedAppPaths($n->getCollectionOfPrimitiveValues()),
            'defenderSecurityCenterBlockExploitProtectionOverride' => fn(ParseNode $n) => $o->setDefenderSecurityCenterBlockExploitProtectionOverride($n->getBooleanValue()),
            'firewallBlockStatefulFTP' => fn(ParseNode $n) => $o->setFirewallBlockStatefulFTP($n->getBooleanValue()),
            'firewallCertificateRevocationListCheckMethod' => fn(ParseNode $n) => $o->setFirewallCertificateRevocationListCheckMethod($n->getEnumValue(FirewallCertificateRevocationListCheckMethodType::class)),
            'firewallIdleTimeoutForSecurityAssociationInSeconds' => fn(ParseNode $n) => $o->setFirewallIdleTimeoutForSecurityAssociationInSeconds($n->getIntegerValue()),
            'firewallIPSecExemptionsAllowDHCP' => fn(ParseNode $n) => $o->setFirewallIPSecExemptionsAllowDHCP($n->getBooleanValue()),
            'firewallIPSecExemptionsAllowICMP' => fn(ParseNode $n) => $o->setFirewallIPSecExemptionsAllowICMP($n->getBooleanValue()),
            'firewallIPSecExemptionsAllowNeighborDiscovery' => fn(ParseNode $n) => $o->setFirewallIPSecExemptionsAllowNeighborDiscovery($n->getBooleanValue()),
            'firewallIPSecExemptionsAllowRouterDiscovery' => fn(ParseNode $n) => $o->setFirewallIPSecExemptionsAllowRouterDiscovery($n->getBooleanValue()),
            'firewallMergeKeyingModuleSettings' => fn(ParseNode $n) => $o->setFirewallMergeKeyingModuleSettings($n->getBooleanValue()),
            'firewallPacketQueueingMethod' => fn(ParseNode $n) => $o->setFirewallPacketQueueingMethod($n->getEnumValue(FirewallPacketQueueingMethodType::class)),
            'firewallPreSharedKeyEncodingMethod' => fn(ParseNode $n) => $o->setFirewallPreSharedKeyEncodingMethod($n->getEnumValue(FirewallPreSharedKeyEncodingMethodType::class)),
            'firewallProfileDomain' => fn(ParseNode $n) => $o->setFirewallProfileDomain($n->getObjectValue([WindowsFirewallNetworkProfile::class, 'createFromDiscriminatorValue'])),
            'firewallProfilePrivate' => fn(ParseNode $n) => $o->setFirewallProfilePrivate($n->getObjectValue([WindowsFirewallNetworkProfile::class, 'createFromDiscriminatorValue'])),
            'firewallProfilePublic' => fn(ParseNode $n) => $o->setFirewallProfilePublic($n->getObjectValue([WindowsFirewallNetworkProfile::class, 'createFromDiscriminatorValue'])),
            'smartScreenBlockOverrideForFiles' => fn(ParseNode $n) => $o->setSmartScreenBlockOverrideForFiles($n->getBooleanValue()),
            'smartScreenEnableInShell' => fn(ParseNode $n) => $o->setSmartScreenEnableInShell($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the firewallBlockStatefulFTP property value. Blocks stateful FTP connections to the device
     * @return bool|null
    */
    public function getFirewallBlockStatefulFTP(): ?bool {
        return $this->getBackingStore()->get('firewallBlockStatefulFTP');
    }

    /**
     * Gets the firewallCertificateRevocationListCheckMethod property value. Possible values for firewallCertificateRevocationListCheckMethod
     * @return FirewallCertificateRevocationListCheckMethodType|null
    */
    public function getFirewallCertificateRevocationListCheckMethod(): ?FirewallCertificateRevocationListCheckMethodType {
        return $this->getBackingStore()->get('firewallCertificateRevocationListCheckMethod');
    }

    /**
     * Gets the firewallIdleTimeoutForSecurityAssociationInSeconds property value. Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600
     * @return int|null
    */
    public function getFirewallIdleTimeoutForSecurityAssociationInSeconds(): ?int {
        return $this->getBackingStore()->get('firewallIdleTimeoutForSecurityAssociationInSeconds');
    }

    /**
     * Gets the firewallIPSecExemptionsAllowDHCP property value. Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsAllowDHCP(): ?bool {
        return $this->getBackingStore()->get('firewallIPSecExemptionsAllowDHCP');
    }

    /**
     * Gets the firewallIPSecExemptionsAllowICMP property value. Configures IPSec exemptions to allow ICMP
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsAllowICMP(): ?bool {
        return $this->getBackingStore()->get('firewallIPSecExemptionsAllowICMP');
    }

    /**
     * Gets the firewallIPSecExemptionsAllowNeighborDiscovery property value. Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsAllowNeighborDiscovery(): ?bool {
        return $this->getBackingStore()->get('firewallIPSecExemptionsAllowNeighborDiscovery');
    }

    /**
     * Gets the firewallIPSecExemptionsAllowRouterDiscovery property value. Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsAllowRouterDiscovery(): ?bool {
        return $this->getBackingStore()->get('firewallIPSecExemptionsAllowRouterDiscovery');
    }

    /**
     * Gets the firewallMergeKeyingModuleSettings property value. If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set
     * @return bool|null
    */
    public function getFirewallMergeKeyingModuleSettings(): ?bool {
        return $this->getBackingStore()->get('firewallMergeKeyingModuleSettings');
    }

    /**
     * Gets the firewallPacketQueueingMethod property value. Possible values for firewallPacketQueueingMethod
     * @return FirewallPacketQueueingMethodType|null
    */
    public function getFirewallPacketQueueingMethod(): ?FirewallPacketQueueingMethodType {
        return $this->getBackingStore()->get('firewallPacketQueueingMethod');
    }

    /**
     * Gets the firewallPreSharedKeyEncodingMethod property value. Possible values for firewallPreSharedKeyEncodingMethod
     * @return FirewallPreSharedKeyEncodingMethodType|null
    */
    public function getFirewallPreSharedKeyEncodingMethod(): ?FirewallPreSharedKeyEncodingMethodType {
        return $this->getBackingStore()->get('firewallPreSharedKeyEncodingMethod');
    }

    /**
     * Gets the firewallProfileDomain property value. Configures the firewall profile settings for domain networks
     * @return WindowsFirewallNetworkProfile|null
    */
    public function getFirewallProfileDomain(): ?WindowsFirewallNetworkProfile {
        return $this->getBackingStore()->get('firewallProfileDomain');
    }

    /**
     * Gets the firewallProfilePrivate property value. Configures the firewall profile settings for private networks
     * @return WindowsFirewallNetworkProfile|null
    */
    public function getFirewallProfilePrivate(): ?WindowsFirewallNetworkProfile {
        return $this->getBackingStore()->get('firewallProfilePrivate');
    }

    /**
     * Gets the firewallProfilePublic property value. Configures the firewall profile settings for public networks
     * @return WindowsFirewallNetworkProfile|null
    */
    public function getFirewallProfilePublic(): ?WindowsFirewallNetworkProfile {
        return $this->getBackingStore()->get('firewallProfilePublic');
    }

    /**
     * Gets the smartScreenBlockOverrideForFiles property value. Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files.
     * @return bool|null
    */
    public function getSmartScreenBlockOverrideForFiles(): ?bool {
        return $this->getBackingStore()->get('smartScreenBlockOverrideForFiles');
    }

    /**
     * Gets the smartScreenEnableInShell property value. Allows IT Admins to configure SmartScreen for Windows.
     * @return bool|null
    */
    public function getSmartScreenEnableInShell(): ?bool {
        return $this->getBackingStore()->get('smartScreenEnableInShell');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('applicationGuardAllowPersistence', $this->getApplicationGuardAllowPersistence());
        $writer->writeBooleanValue('applicationGuardAllowPrintToLocalPrinters', $this->getApplicationGuardAllowPrintToLocalPrinters());
        $writer->writeBooleanValue('applicationGuardAllowPrintToNetworkPrinters', $this->getApplicationGuardAllowPrintToNetworkPrinters());
        $writer->writeBooleanValue('applicationGuardAllowPrintToPDF', $this->getApplicationGuardAllowPrintToPDF());
        $writer->writeBooleanValue('applicationGuardAllowPrintToXPS', $this->getApplicationGuardAllowPrintToXPS());
        $writer->writeEnumValue('applicationGuardBlockClipboardSharing', $this->getApplicationGuardBlockClipboardSharing());
        $writer->writeEnumValue('applicationGuardBlockFileTransfer', $this->getApplicationGuardBlockFileTransfer());
        $writer->writeBooleanValue('applicationGuardBlockNonEnterpriseContent', $this->getApplicationGuardBlockNonEnterpriseContent());
        $writer->writeBooleanValue('applicationGuardEnabled', $this->getApplicationGuardEnabled());
        $writer->writeBooleanValue('applicationGuardForceAuditing', $this->getApplicationGuardForceAuditing());
        $writer->writeEnumValue('appLockerApplicationControl', $this->getAppLockerApplicationControl());
        $writer->writeBooleanValue('bitLockerDisableWarningForOtherDiskEncryption', $this->getBitLockerDisableWarningForOtherDiskEncryption());
        $writer->writeBooleanValue('bitLockerEnableStorageCardEncryptionOnMobile', $this->getBitLockerEnableStorageCardEncryptionOnMobile());
        $writer->writeBooleanValue('bitLockerEncryptDevice', $this->getBitLockerEncryptDevice());
        $writer->writeObjectValue('bitLockerRemovableDrivePolicy', $this->getBitLockerRemovableDrivePolicy());
        $writer->writeCollectionOfPrimitiveValues('defenderAdditionalGuardedFolders', $this->getDefenderAdditionalGuardedFolders());
        $writer->writeCollectionOfPrimitiveValues('defenderAttackSurfaceReductionExcludedPaths', $this->getDefenderAttackSurfaceReductionExcludedPaths());
        $writer->writeBinaryContent('defenderExploitProtectionXml', $this->getDefenderExploitProtectionXml());
        $writer->writeStringValue('defenderExploitProtectionXmlFileName', $this->getDefenderExploitProtectionXmlFileName());
        $writer->writeCollectionOfPrimitiveValues('defenderGuardedFoldersAllowedAppPaths', $this->getDefenderGuardedFoldersAllowedAppPaths());
        $writer->writeBooleanValue('defenderSecurityCenterBlockExploitProtectionOverride', $this->getDefenderSecurityCenterBlockExploitProtectionOverride());
        $writer->writeBooleanValue('firewallBlockStatefulFTP', $this->getFirewallBlockStatefulFTP());
        $writer->writeEnumValue('firewallCertificateRevocationListCheckMethod', $this->getFirewallCertificateRevocationListCheckMethod());
        $writer->writeIntegerValue('firewallIdleTimeoutForSecurityAssociationInSeconds', $this->getFirewallIdleTimeoutForSecurityAssociationInSeconds());
        $writer->writeBooleanValue('firewallIPSecExemptionsAllowDHCP', $this->getFirewallIPSecExemptionsAllowDHCP());
        $writer->writeBooleanValue('firewallIPSecExemptionsAllowICMP', $this->getFirewallIPSecExemptionsAllowICMP());
        $writer->writeBooleanValue('firewallIPSecExemptionsAllowNeighborDiscovery', $this->getFirewallIPSecExemptionsAllowNeighborDiscovery());
        $writer->writeBooleanValue('firewallIPSecExemptionsAllowRouterDiscovery', $this->getFirewallIPSecExemptionsAllowRouterDiscovery());
        $writer->writeBooleanValue('firewallMergeKeyingModuleSettings', $this->getFirewallMergeKeyingModuleSettings());
        $writer->writeEnumValue('firewallPacketQueueingMethod', $this->getFirewallPacketQueueingMethod());
        $writer->writeEnumValue('firewallPreSharedKeyEncodingMethod', $this->getFirewallPreSharedKeyEncodingMethod());
        $writer->writeObjectValue('firewallProfileDomain', $this->getFirewallProfileDomain());
        $writer->writeObjectValue('firewallProfilePrivate', $this->getFirewallProfilePrivate());
        $writer->writeObjectValue('firewallProfilePublic', $this->getFirewallProfilePublic());
        $writer->writeBooleanValue('smartScreenBlockOverrideForFiles', $this->getSmartScreenBlockOverrideForFiles());
        $writer->writeBooleanValue('smartScreenEnableInShell', $this->getSmartScreenEnableInShell());
    }

    /**
     * Sets the applicationGuardAllowPersistence property value. Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.)
     *  @param bool|null $value Value to set for the applicationGuardAllowPersistence property.
    */
    public function setApplicationGuardAllowPersistence(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardAllowPersistence', $value);
    }

    /**
     * Sets the applicationGuardAllowPrintToLocalPrinters property value. Allow printing to Local Printers from Container
     *  @param bool|null $value Value to set for the applicationGuardAllowPrintToLocalPrinters property.
    */
    public function setApplicationGuardAllowPrintToLocalPrinters(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardAllowPrintToLocalPrinters', $value);
    }

    /**
     * Sets the applicationGuardAllowPrintToNetworkPrinters property value. Allow printing to Network Printers from Container
     *  @param bool|null $value Value to set for the applicationGuardAllowPrintToNetworkPrinters property.
    */
    public function setApplicationGuardAllowPrintToNetworkPrinters(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardAllowPrintToNetworkPrinters', $value);
    }

    /**
     * Sets the applicationGuardAllowPrintToPDF property value. Allow printing to PDF from Container
     *  @param bool|null $value Value to set for the applicationGuardAllowPrintToPDF property.
    */
    public function setApplicationGuardAllowPrintToPDF(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardAllowPrintToPDF', $value);
    }

    /**
     * Sets the applicationGuardAllowPrintToXPS property value. Allow printing to XPS from Container
     *  @param bool|null $value Value to set for the applicationGuardAllowPrintToXPS property.
    */
    public function setApplicationGuardAllowPrintToXPS(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardAllowPrintToXPS', $value);
    }

    /**
     * Sets the applicationGuardBlockClipboardSharing property value. Possible values for applicationGuardBlockClipboardSharingType
     *  @param ApplicationGuardBlockClipboardSharingType|null $value Value to set for the applicationGuardBlockClipboardSharing property.
    */
    public function setApplicationGuardBlockClipboardSharing(?ApplicationGuardBlockClipboardSharingType $value): void {
        $this->getBackingStore()->set('applicationGuardBlockClipboardSharing', $value);
    }

    /**
     * Sets the applicationGuardBlockFileTransfer property value. Possible values for applicationGuardBlockFileTransfer
     *  @param ApplicationGuardBlockFileTransferType|null $value Value to set for the applicationGuardBlockFileTransfer property.
    */
    public function setApplicationGuardBlockFileTransfer(?ApplicationGuardBlockFileTransferType $value): void {
        $this->getBackingStore()->set('applicationGuardBlockFileTransfer', $value);
    }

    /**
     * Sets the applicationGuardBlockNonEnterpriseContent property value. Block enterprise sites to load non-enterprise content, such as third party plug-ins
     *  @param bool|null $value Value to set for the applicationGuardBlockNonEnterpriseContent property.
    */
    public function setApplicationGuardBlockNonEnterpriseContent(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardBlockNonEnterpriseContent', $value);
    }

    /**
     * Sets the applicationGuardEnabled property value. Enable Windows Defender Application Guard
     *  @param bool|null $value Value to set for the applicationGuardEnabled property.
    */
    public function setApplicationGuardEnabled(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardEnabled', $value);
    }

    /**
     * Sets the applicationGuardForceAuditing property value. Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.)
     *  @param bool|null $value Value to set for the applicationGuardForceAuditing property.
    */
    public function setApplicationGuardForceAuditing(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardForceAuditing', $value);
    }

    /**
     * Sets the appLockerApplicationControl property value. Possible values of AppLocker Application Control Types
     *  @param AppLockerApplicationControlType|null $value Value to set for the appLockerApplicationControl property.
    */
    public function setAppLockerApplicationControl(?AppLockerApplicationControlType $value): void {
        $this->getBackingStore()->set('appLockerApplicationControl', $value);
    }

    /**
     * Sets the bitLockerDisableWarningForOtherDiskEncryption property value. Allows the Admin to disable the warning prompt for other disk encryption on the user machines.
     *  @param bool|null $value Value to set for the bitLockerDisableWarningForOtherDiskEncryption property.
    */
    public function setBitLockerDisableWarningForOtherDiskEncryption(?bool $value): void {
        $this->getBackingStore()->set('bitLockerDisableWarningForOtherDiskEncryption', $value);
    }

    /**
     * Sets the bitLockerEnableStorageCardEncryptionOnMobile property value. Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU.
     *  @param bool|null $value Value to set for the bitLockerEnableStorageCardEncryptionOnMobile property.
    */
    public function setBitLockerEnableStorageCardEncryptionOnMobile(?bool $value): void {
        $this->getBackingStore()->set('bitLockerEnableStorageCardEncryptionOnMobile', $value);
    }

    /**
     * Sets the bitLockerEncryptDevice property value. Allows the admin to require encryption to be turned on using BitLocker.
     *  @param bool|null $value Value to set for the bitLockerEncryptDevice property.
    */
    public function setBitLockerEncryptDevice(?bool $value): void {
        $this->getBackingStore()->set('bitLockerEncryptDevice', $value);
    }

    /**
     * Sets the bitLockerRemovableDrivePolicy property value. BitLocker Removable Drive Policy.
     *  @param BitLockerRemovableDrivePolicy|null $value Value to set for the bitLockerRemovableDrivePolicy property.
    */
    public function setBitLockerRemovableDrivePolicy(?BitLockerRemovableDrivePolicy $value): void {
        $this->getBackingStore()->set('bitLockerRemovableDrivePolicy', $value);
    }

    /**
     * Sets the defenderAdditionalGuardedFolders property value. List of folder paths to be added to the list of protected folders
     *  @param array<string>|null $value Value to set for the defenderAdditionalGuardedFolders property.
    */
    public function setDefenderAdditionalGuardedFolders(?array $value): void {
        $this->getBackingStore()->set('defenderAdditionalGuardedFolders', $value);
    }

    /**
     * Sets the defenderAttackSurfaceReductionExcludedPaths property value. List of exe files and folders to be excluded from attack surface reduction rules
     *  @param array<string>|null $value Value to set for the defenderAttackSurfaceReductionExcludedPaths property.
    */
    public function setDefenderAttackSurfaceReductionExcludedPaths(?array $value): void {
        $this->getBackingStore()->set('defenderAttackSurfaceReductionExcludedPaths', $value);
    }

    /**
     * Sets the defenderExploitProtectionXml property value. Xml content containing information regarding exploit protection details.
     *  @param StreamInterface|null $value Value to set for the defenderExploitProtectionXml property.
    */
    public function setDefenderExploitProtectionXml(?StreamInterface $value): void {
        $this->getBackingStore()->set('defenderExploitProtectionXml', $value);
    }

    /**
     * Sets the defenderExploitProtectionXmlFileName property value. Name of the file from which DefenderExploitProtectionXml was obtained.
     *  @param string|null $value Value to set for the defenderExploitProtectionXmlFileName property.
    */
    public function setDefenderExploitProtectionXmlFileName(?string $value): void {
        $this->getBackingStore()->set('defenderExploitProtectionXmlFileName', $value);
    }

    /**
     * Sets the defenderGuardedFoldersAllowedAppPaths property value. List of paths to exe that are allowed to access protected folders
     *  @param array<string>|null $value Value to set for the defenderGuardedFoldersAllowedAppPaths property.
    */
    public function setDefenderGuardedFoldersAllowedAppPaths(?array $value): void {
        $this->getBackingStore()->set('defenderGuardedFoldersAllowedAppPaths', $value);
    }

    /**
     * Sets the defenderSecurityCenterBlockExploitProtectionOverride property value. Indicates whether or not to block user from overriding Exploit Protection settings.
     *  @param bool|null $value Value to set for the defenderSecurityCenterBlockExploitProtectionOverride property.
    */
    public function setDefenderSecurityCenterBlockExploitProtectionOverride(?bool $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterBlockExploitProtectionOverride', $value);
    }

    /**
     * Sets the firewallBlockStatefulFTP property value. Blocks stateful FTP connections to the device
     *  @param bool|null $value Value to set for the firewallBlockStatefulFTP property.
    */
    public function setFirewallBlockStatefulFTP(?bool $value): void {
        $this->getBackingStore()->set('firewallBlockStatefulFTP', $value);
    }

    /**
     * Sets the firewallCertificateRevocationListCheckMethod property value. Possible values for firewallCertificateRevocationListCheckMethod
     *  @param FirewallCertificateRevocationListCheckMethodType|null $value Value to set for the firewallCertificateRevocationListCheckMethod property.
    */
    public function setFirewallCertificateRevocationListCheckMethod(?FirewallCertificateRevocationListCheckMethodType $value): void {
        $this->getBackingStore()->set('firewallCertificateRevocationListCheckMethod', $value);
    }

    /**
     * Sets the firewallIdleTimeoutForSecurityAssociationInSeconds property value. Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600
     *  @param int|null $value Value to set for the firewallIdleTimeoutForSecurityAssociationInSeconds property.
    */
    public function setFirewallIdleTimeoutForSecurityAssociationInSeconds(?int $value): void {
        $this->getBackingStore()->set('firewallIdleTimeoutForSecurityAssociationInSeconds', $value);
    }

    /**
     * Sets the firewallIPSecExemptionsAllowDHCP property value. Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic
     *  @param bool|null $value Value to set for the firewallIPSecExemptionsAllowDHCP property.
    */
    public function setFirewallIPSecExemptionsAllowDHCP(?bool $value): void {
        $this->getBackingStore()->set('firewallIPSecExemptionsAllowDHCP', $value);
    }

    /**
     * Sets the firewallIPSecExemptionsAllowICMP property value. Configures IPSec exemptions to allow ICMP
     *  @param bool|null $value Value to set for the firewallIPSecExemptionsAllowICMP property.
    */
    public function setFirewallIPSecExemptionsAllowICMP(?bool $value): void {
        $this->getBackingStore()->set('firewallIPSecExemptionsAllowICMP', $value);
    }

    /**
     * Sets the firewallIPSecExemptionsAllowNeighborDiscovery property value. Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes
     *  @param bool|null $value Value to set for the firewallIPSecExemptionsAllowNeighborDiscovery property.
    */
    public function setFirewallIPSecExemptionsAllowNeighborDiscovery(?bool $value): void {
        $this->getBackingStore()->set('firewallIPSecExemptionsAllowNeighborDiscovery', $value);
    }

    /**
     * Sets the firewallIPSecExemptionsAllowRouterDiscovery property value. Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes
     *  @param bool|null $value Value to set for the firewallIPSecExemptionsAllowRouterDiscovery property.
    */
    public function setFirewallIPSecExemptionsAllowRouterDiscovery(?bool $value): void {
        $this->getBackingStore()->set('firewallIPSecExemptionsAllowRouterDiscovery', $value);
    }

    /**
     * Sets the firewallMergeKeyingModuleSettings property value. If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set
     *  @param bool|null $value Value to set for the firewallMergeKeyingModuleSettings property.
    */
    public function setFirewallMergeKeyingModuleSettings(?bool $value): void {
        $this->getBackingStore()->set('firewallMergeKeyingModuleSettings', $value);
    }

    /**
     * Sets the firewallPacketQueueingMethod property value. Possible values for firewallPacketQueueingMethod
     *  @param FirewallPacketQueueingMethodType|null $value Value to set for the firewallPacketQueueingMethod property.
    */
    public function setFirewallPacketQueueingMethod(?FirewallPacketQueueingMethodType $value): void {
        $this->getBackingStore()->set('firewallPacketQueueingMethod', $value);
    }

    /**
     * Sets the firewallPreSharedKeyEncodingMethod property value. Possible values for firewallPreSharedKeyEncodingMethod
     *  @param FirewallPreSharedKeyEncodingMethodType|null $value Value to set for the firewallPreSharedKeyEncodingMethod property.
    */
    public function setFirewallPreSharedKeyEncodingMethod(?FirewallPreSharedKeyEncodingMethodType $value): void {
        $this->getBackingStore()->set('firewallPreSharedKeyEncodingMethod', $value);
    }

    /**
     * Sets the firewallProfileDomain property value. Configures the firewall profile settings for domain networks
     *  @param WindowsFirewallNetworkProfile|null $value Value to set for the firewallProfileDomain property.
    */
    public function setFirewallProfileDomain(?WindowsFirewallNetworkProfile $value): void {
        $this->getBackingStore()->set('firewallProfileDomain', $value);
    }

    /**
     * Sets the firewallProfilePrivate property value. Configures the firewall profile settings for private networks
     *  @param WindowsFirewallNetworkProfile|null $value Value to set for the firewallProfilePrivate property.
    */
    public function setFirewallProfilePrivate(?WindowsFirewallNetworkProfile $value): void {
        $this->getBackingStore()->set('firewallProfilePrivate', $value);
    }

    /**
     * Sets the firewallProfilePublic property value. Configures the firewall profile settings for public networks
     *  @param WindowsFirewallNetworkProfile|null $value Value to set for the firewallProfilePublic property.
    */
    public function setFirewallProfilePublic(?WindowsFirewallNetworkProfile $value): void {
        $this->getBackingStore()->set('firewallProfilePublic', $value);
    }

    /**
     * Sets the smartScreenBlockOverrideForFiles property value. Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files.
     *  @param bool|null $value Value to set for the smartScreenBlockOverrideForFiles property.
    */
    public function setSmartScreenBlockOverrideForFiles(?bool $value): void {
        $this->getBackingStore()->set('smartScreenBlockOverrideForFiles', $value);
    }

    /**
     * Sets the smartScreenEnableInShell property value. Allows IT Admins to configure SmartScreen for Windows.
     *  @param bool|null $value Value to set for the smartScreenEnableInShell property.
    */
    public function setSmartScreenEnableInShell(?bool $value): void {
        $this->getBackingStore()->set('smartScreenEnableInShell', $value);
    }

}
