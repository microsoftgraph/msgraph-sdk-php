<?php

namespace Microsoft\Graph\Test;

class TestConstants
{
    /**
    * To run functional tests, supply a 
    * client ID, username, and password to
    * log in via resource owner credential flow.
    * While the tests are written in such a way 
    * as to preserve the state of the user's account,
    * it is best to use a test account for these if 
    * possible.
    */
    const CLIENT_ID = "CLIENT_ID";
    const USERNAME = "USERNAME";
    const PASSWORD = "USER_PASSWORD";

    // Planner plans can currently not be deleted; you will need
    // to create your own plan and specify the ID here
    const PLAN_ID = "PLAN_ID";
}