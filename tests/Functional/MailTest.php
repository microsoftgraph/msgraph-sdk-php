<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;

class MailTest extends TestCase
{
    /**
    * @group functional
    */
    public function createEmail($emailBody)
    {
        $graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;

        $me = $client->createRequest("GET", "/me")
                     ->setReturnType(Model\User::class)
                     ->execute();
        $subject = new DateTime();
        $subject = $subject->format('Y-m-d H:i:s');
        
        $message = new Model\Message();
        $message->setSubject($subject);
        $body = new Model\ItemBody();
        $body->setContent($emailBody);
        $message->setBody($body);
        $emailAddress = new Model\EmailAddress();
        $emailAddress->setAddress($me->getMail());
        $recipient = new Model\Recipient();
        $recipient->setEmailAddress($emailAddress);
        $message->setToRecipients(array($recipient));
        return $message;
    }

    /**
    * @group functional
    */
    public function testSendMail()
    {
        $message = $this->createEmail("Sent from the SendMail test");

        $graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;

        $body = array("message" => $message);

        $client->createRequest("POST", "/me/sendmail")
               ->attachBody($body)
               ->execute();

        $mailFolderMessages = $client->createRequest("GET", "/me/mailFolders/sentItems/messages?\$filter=subject eq '\$message->getSubject()'")
                                     ->setReturnType(Model\Message::class)
                                     ->execute();
        $this->assertNotNull($mailFolderMessages);
    }
    
    /**
    * @group functional
    */
    public function testSendMailWithAttachment()
    {
        $message = $this->createEmail("Sent from the SendMailWithAttachment test");

        $graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;

        $attachment = new Model\FileAttachment();
        $attachment->setName("MyFileAttachment.txt");
        $attachment->setContentBytes("data");
        $attachment->setODataType("#microsoft.graph.fileAttachment");

        $message->setAttachments(array($attachment));

        $body = array("message" => $message);

        $client->createRequest("POST", "/me/sendmail")
               ->attachBody($body)
               ->execute();

        $mailFolderMessages = $client->createRequest("GET", "/me/mailFolders/sentItems/messages?\$filter=subject eq '\$message->getSubject()'")
                                     ->setReturnType(Model\Message::class)
                                     ->execute();
        $this->assertNotNull($mailFolderMessages);
    }

//TODO: FIX STREAMS
    /**
    * @group functional 
    * @group failing
    */
    public function testGetMailWithAttachment()
    {
        $graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;

        $messageCollection = $client->createRequest("GET", "/me/messages?\$filter=hasAttachments eq true")
                                    ->setReturnType(Model\Message::class)
                                    ->execute();
        $messageId = $messageCollection[0]->getId();

        if (count($messageCollection) > 0) {
            $attachments = $client->createRequest("GET", "/me/messages/$messageId/attachments")
                                  ->setReturnType(Model\Attachment::class)
                                  ->execute();

            $attachmentId = $attachments[0]->getId();
            $attachment = $client->createRequest("GET", "/me/messages/$messageId/attachments/$attachmentId")
                                 ->setReturnType(GuzzleHttp\Psr7\Stream::class)
                                 ->execute();
            $attachment = $attachment->getResponseAsObject(Model\FileAttachment::class);
            $this->assertInstanceOf(Model\FileAttachment::class, $attachment);
            $this->assertNotNull($attachment->getContentBytes());
        }
    }

    /**
    * @group functional
    */
    public function testMailGetNextPage()
    {
        $graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;

        $messageIterator = $client->createCollectionRequest("GET", "/me/messages")
                                  ->setReturnType(Model\Message::class);
        $messages = $messageIterator->getPage();

        while (!$messageIterator->isEnd())
        {
            $messages = $messageIterator->getPage();
        }
        $this->assertNotNull($messages);
    }
}