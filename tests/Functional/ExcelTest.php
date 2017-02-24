<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;
use GuzzleHttp\Exception\RequestException;

class ExcelTest extends TestCase
{
	/**
	* @group functional
	*/
    public function testCreateDeleteWorkbook()
    {
    	$this->expectException(GuzzleHttp\Exception\RequestException::class);

    	$graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;

        
        $fileId = $this->createTestFile('_excelTestResource.xlsx');
        $this->assertNotNull($fileId);

        $this->deleteTestFile($fileId);

        //Fail to retrieve the deleted item
        $client->createRequest("GET", "/me/drive/items/$fileId")
        	   ->execute();
    }

    public function createTestFile($filename)
    {
    	$graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;

    	$excelWorkbook = new Model\DriveItem();
    	$excelWorkbook->setName($filename);
    	$file = new Model\File();
    	$file->setODataType("microsoft.graph.file");
    	$excelWorkbook->setFile($file);

    	$excelWorkbookDriveItem = $client->createRequest("POST", "/me/drive/root/children")
    									 ->attachBody($excelWorkbook)
    									 ->setReturnType(Model\DriveItem::class)
    									 ->execute();
    	$this->assertNotNull($excelWorkbookDriveItem);

    	return $excelWorkbookDriveItem->getId();
    }

    public function deleteTestFile($fileId)
    {
    	//After updating the doc, the service cannot immediately process the delete
    	sleep(4);

    	$graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;

    	$client->createRequest("DELETE", "/me/drive/items/$fileId")
    		   ->addHeaders(array("if-match" => "*"))
    		   ->execute();
    }

    public function uploadTestFileContent($fileId)
    {
    	$graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;

        $stream = GuzzleHttp\Psr7\stream_for(fopen(".\\tests\\Functional\\Resources\\excelTestResource.xlsx", "r"));
    	$excelDriveItem = $client->createRequest("PUT", "/me/drive/items/$fileId/content")
    							 ->addHeaders(array(
    							 	"Content-Type" => "application/octet-stream", 
    							 	"Content-Length" => filesize(".\\tests\\Functional\\Resources\\excelTestResource.xlsx")
    							 ))
    							 ->attachBody($stream)
    							 ->execute();
    	$this->assertEquals(200, $excelDriveItem->getStatus());
    }

    /**
    * @group functional
    */
    public function testGetUpdateRange()
    {
    	$graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;
        $fileId = $this->createTestFile('_excelTestResource.xlsx');

        try {
        	$this->uploadTestFileContent($fileId);
	        $rangeToUpdate = $client->createRequest("GET", "/me/drive/items/$fileId/workbook/worksheets/GetUpdateRange/Range(address='A1')")
	        						->setReturnType(Model\WorkbookRange::class)
	        						->execute();
	        $arr = $rangeToUpdate->getValues();

	        $arr[0][0] = "TestValueB";
	        $dummyWorkbookRange = new Model\WorkbookRange();
	        $dummyWorkbookRange->setValues($arr);

	        $workbookRange = $client->createRequest("PATCH", "/me/drive/items/$fileId/workbook/worksheets/GetUpdateRange/Range(address='A1')")
	        						->attachBody($dummyWorkbookRange)
	        						->setReturnType(Model\WorkbookRange::class)
	        						->execute();
	        $this->assertNotNull($workbookRange);
	        $this->assertEquals("TestValueB", $workbookRange->getValues()[0][0]);
	    } catch (Exception $e) {
	    	print_r($e->getMessage());
	    } finally {
	    	$this->deleteTestFile($fileId);
	    }
    }

    public function testChangeNumberFormat()
    {
    	$graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;
        $fileId = $this->createTestFile('_excelTestResource.xlsx');

 		try {
        	$this->uploadTestFileContent($fileId);
        	$excelWorksheetName = "ChangeNumberFormat";
        	$rangeAddress = "E2";

        	$arr = [["$#,##0.00;[Red]$#,##0.00"]];

        	$workbookRange = $client->createRequest("PATCH", "/me/drive/items/$fileId/workbook/worksheets/$excelWorksheetName/range(address='$rangeAddress')")
        							->attachBody(array("numberFormat" => $arr))
        							->setReturnType(Model\WorkbookRange::class)
        							->execute();
        	$this->assertNotNull($workbookRange);
        	$this->assertEquals($arr, $workbookRange->getNumberFormat());
        } catch (Exception $e) {
        	$this->fail($e->getMessage());
        } finally {
        	$this->deleteTestFile($fileId);
        }

    }

    /**
    * @group functional
    */
    public function testAbsFunc()
    {
		$graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;
        $fileId = $this->createTestFile('_excelTestResource.xlsx');

        try {
        	$this->uploadTestFileContent($fileId);

        	$inputNumber = "-10";

        	$workbookFunctionResult = $client->createRequest("POST", "/me/drive/items/$fileId/workbook/functions/abs")
        									 ->attachBody('{"number": '. $inputNumber . '}')
        									 ->setReturnType(Model\WorkbookFunctionResult::class)
        									 ->execute();
        	$this->assertNotNull($workbookFunctionResult);
        	$this->assertEquals("10", $workbookFunctionResult->getValue());
        } catch (Exception $e) {
        	$this->fail($e->getMessage());
        } finally {
        	$this->deleteTestFile($fileId);
        }

    }

    /**
    * @group functional
    */
    public function testSetFormula()
    {
    	$graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;
        $fileId = $this->createTestFile('_excelTestResource.xlsx');

        try {
        	$this->uploadTestFileContent($fileId);
        	$arr = [['=A4*B4']];

        	$workbookRange = $client->createRequest("PATCH", "/me/drive/items/$fileId/workbook/worksheets/SetFormula/range(address='C4')")
        							->attachBody(array("formulas" => $arr))
        							->setReturnType(Model\WorkbookRange::class)
        							->execute();
        	$this->assertNotNull($workbookRange);
        	$this->assertEquals($arr, $workbookRange->getFormulas());
     
        } catch (Exception $e) {
        	$this->fail($e->getMessage());
        } finally {
        	$this->deleteTestFile($fileId);
        }
    }

    /**
    * @group functional
    */
    public function testAddTableUsedRange()
    {
    	$graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;
        $fileId = $this->createTestFile('_excelTestResource.xlsx');

        try {
        	$this->uploadTestFileContent($fileId);

        	$workbookRange = $client->createRequest("GET", "/me/drive/items/$fileId/workbook/worksheets/AddTableUsedRange/usedrange")
        							->setReturnType(Model\WorkbookRange::class)
        							->execute();

        	$data = array("address" => $workbookRange->getAddress(), "hasHeaders" => false);

        	$workbookTable = $client->createRequest("POST", "/me/drive/items/$fileId/workbook/worksheets/AddTableUsedRange/tables")
        							->attachBody($data)
        							->setReturnType(Model\WorkbookTable::class);

        	$this->assertNotNull($workbookTable);
     
        } catch (Exception $e) {
        	$this->fail($e->getMessage());
        } finally {
        	$this->deleteTestFile($fileId);
        }
    }

    /**
    * @group functional
    */
    public function testAddRowToTable()
    {
		$graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;
        $fileId = $this->createTestFile('_excelTestResource.xlsx');

        try {
        	$this->uploadTestFileContent($fileId);

        	$newWorkbookTableRow = new Model\WorkbookTableRow();
        	$newWorkbookTableRow->setIndex(0);
        	$arr = [["ValueA2", "ValueA3"]];
        	$newWorkbookTableRow->setValues($arr);

        	$workbookTableRow = $client->createRequest("POST", "/me/drive/items/$fileId/workbook/tables/Table1/Rows")
        							->attachBody($newWorkbookTableRow)
        							->setReturnType(Model\WorkbookRange::class)
        							->execute();

        	$this->assertNotNull($workbookTableRow);
        } catch (Exception $e) {
        	$this->fail($e->getMessage());
        } finally {
        	$this->deleteTestFile($fileId);
        }
    }

    /**
    * @group functional
    */
    public function testSortTable()
    {
    	$graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;
        $fileId = $this->createTestFile('_excelTestResource.xlsx');

        try {
        	$this->uploadTestFileContent($fileId);

        	$sortField = new Model\WorkbookSortField();
        	$sortField->setAscending(true);
        	$sortField->setSortOn("Value");
        	$sortField->setKey(0);

        	$workbookSortFields = $client->createRequest("POST", "/me/drive/items/$fileId/workbook/tables/Table2/sort/apply")
        							->attachBody('{"fields":'. json_encode(array($sortField)) . '}')
        							->setReturnType(Model\WorkbookSortField::class)
        							->execute();

        	$this->assertNotNull($workbookSortFields);
        } catch (Exception $e) {
        	$this->fail($e->getMessage());
        } finally {
        	$this->deleteTestFile($fileId);
        }
    }

    /**
    * @group functional
    */
    public function testFilterTableValues()
    {
    	$graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;
        $fileId = $this->createTestFile('_excelTestResource.xlsx');

        try {
        	$this->uploadTestFileContent($fileId);

        	$client->createRequest(
        				"POST", 
        				"/me/drive/items/$fileId/workbook/tables/FilterTableValues/columns/1/filter/applyvaluesfilter"
        			)
        			->attachBody('{"values":["2"]}')
        			->setReturnType(Model\WorkbookSortField::class)
        			->execute();
        } catch (Exception $e) {
        	$this->fail($e->getMessage());
        } finally {
        	$this->deleteTestFile($fileId);
        }
    }

    /**
    * @group functional
    */
    public function testCreateChartFromTable()
    {
    	$graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;
        $fileId = $this->createTestFile('_excelTestResource.xlsx');

        try {
        	$this->uploadTestFileContent($fileId);

        	$tableRange = $client->createRequest("GET", "/me/drive/items/$fileId/workbook/tables/CreateChartFromTable/range")
        							->setReturnType(Model\WorkbookRange::class)
        							->execute();
        	$address = $tableRange->getAddress();

        	$workbookChart = $client->createRequest("POST", "/me/drive/items/$fileId/workbook/worksheets/CreateChartFromTable/charts/add")
        							->attachBody(array("type" => "ColumnStacked", "sourceData" => "$address", "seriesBy" => "Auto"))
        							->setReturnType(Model\WorkbookChart::class)
        							->execute();
        	$this->assertNotNull($workbookChart);
        } catch (Exception $e) {
        	$this->fail($e->getMessage());
        } finally {
        	$this->deleteTestFile($fileId);
        }
    }

    /**
    * @group functional
    */
    public function testProtectWorksheet()
    {
    	$graphTestBase = new GraphTestBase();
        $client = $graphTestBase->graphClient;

        $fileId = $this->createTestFile('_excelTestResource.xlsx');
        try{
        	$this->uploadTestFileContent($fileId);
        	$client->createRequest("POST", "/me/drive/items/$fileId/workbook/worksheets/ProtectWorksheet/protection/protect")
        		   ->execute();

        	$dummyWorkbookRange = new Model\WorkbookRange();
        	$dummyWorkbookRange->setValues('[["This should not work"]]');

        	$workbookRange = $client->createRequest("PATCH", "/me/drive/items/$fileId/workbook/worksheets('protectworksheet')/cell(row=1,column=1)")
        							->attachBody($dummyWorkbookRange)
        							->execute();
        } catch(Exception $e)
        {
        	//403: Forbidden - file is locked for editing
        	$this->assertEquals(403, $e->getResponse()->getStatusCode());

        	$client->createRequest("POST", "/me/drive/items/$fileId/workbook/worksheets/ProtectWorksheet/protection/unprotect")
        		   ->execute();
        } finally{
        	//Clean up the test file
        	$this->deleteTestFile($fileId);
        }
        
        
    }
}