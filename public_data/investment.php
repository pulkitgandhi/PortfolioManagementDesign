<html>

<head>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet"> -->
    <title>Investment Portfolio Manager</title>
    <link rel="stylesheet" href="investment-layout.css">
    <div class="menu">
        <div class="title">
            <p>Investment Management Corporation</p>
        </div>
        <nav>
            <a href="investment.php">Dashboard</a>
            <a>Meeting</a>
            <a>News</a>
            <a>Login</a>
        </nav>
    </div>

</head>

<body>
    <div class="reset_reload">
        <div class="reset_web">
            <h2>Reset</h2>
            <p>Press RESET below to reset all the data from this application.</p>
            <form method="POST" action="investment.php">
                <!-- if you want another page to load after the button is clicked, you have to specify that page in the action parameter -->
                <input type="hidden" id="resetTablesRequest" name="resetTablesRequest">
                <p><input type="submit" value="Reset" name="reset"></p>
            </form>
        </div>
        <div class="reload_web">
            <h2>Reload</h2>
            <p>Press RELOAD below to reset data then reload example data to this application.</p>
            <form method="POST" action="investment.php">
                <!-- if you want another page to load after the button is clicked, you have to specify that page in the action parameter -->
                <input type="hidden" id="reloadTablesRequest" name="reloadTablesRequest">
                <p><input type="submit" value="Reload" name="reload"></p>
            </form>
        </div>
    </div>

    <hr />

    <h2 style="text-align: center;">Client Management</h2>
    <div class="client_management">
        <div class="insert_client">
            <h3>Insert Client Data</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="insertClientQueryRequest" name="insertClientQueryRequest">
                ClientID: <input type="text" name="ins_client_ID"> <br /><br />
                Name: <input type="text" name="ins_client_Name"> <br /><br />
                Address: <input type="text" name="ins_client_Address"> <br /><br />
                <input type="submit" value="Insert" name="insertSubmit"></p>
            </form>
        </div>
        <div class="remove_client">
            <h3>Remove Client Data</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="removeClientQueryRequest" name="removeClientQueryRequest">
                ClientID: <input type="text" name="rem_client_ID"> <br /><br />
                Name: <input type="text" name="rem_client_Name"> <br /><br />
                <input type="submit" value="Remove" name="removeSubmit"></p>
            </form>
        </div>
        <div class="update_client">
            <h3>Update Client Data</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="updateClientQueryRequest" name="updateClientQueryRequest">
                ClientID: <input type="text" name="upd_client_ID"> <br /><br />
                New Name: <input type="text" name="upd_new_client_Name"> <br /><br />
                New Address: <input type="text" name="upd_new_client_Address"> <br /><br />
                <input type="submit" value="Update" name="updateSubmit"></p>
            </form>
        </div>
        <div class="count_client">
            <h3>Count Clients</h3>
            <form method="GET" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="countTupleRequest" name="countTupleRequest">
                <input type="submit" name="countTuples"></p>
            </form>
        </div>
        <div class="display_client">
            <h3>Display Clients</h3>
            <form method="GET" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="displayClientRequest" name="displayClientRequest">
                <input type="submit" name="displayClients"></p>
            </form>
        </div>
    </div>
    <div class="client_management">
        <div class="retrieve_client">
            <h3>Retrieve Given Client Data</h3>
            <form method="GET" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="retrieveClientRequest" name="retrieveClientRequest">
                ClientID: <input type="text" name="ret_client_ID"> <br /><br />
                <input type="submit" name="retrieveClient"></p>
            </form>
        </div>
        <div class="find_client">
            <h3>Find Clients on Profit</h3>
            <form method="GET" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="findClientRequest" name="findClientRequest">
                Profit: <input type="text" name="fin_profit"> <br /><br />
                Count: <input type="text" name="fin_count"> <br /><br />
                <input type="submit" name="findClient"></p>
            </form>
        </div>
    </div>

    <hr />

    <h2 style="text-align: center;">Banking Information</h2>
    <div class="client_management">
        <div class="insert_banks">
            <h3>Insert Bank Information</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="insertBankInfoQueryRequest" name="insertBankInfoQueryRequest">
                Bank Name: <input type="text" name="info_bankName"> <br /><br />
                Instituition Number: <input type="text" name="info_instiNum"> <br /><br />
                <input type="submit" value="Insert" name="insertSubmit"></p>
            </form>
        </div>
        <div class="remove_banks">
            <h3>Remove Bank Information</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="removeBankInfoQueryRequest" name="removeBankInfoQueryRequest">
                Bank Name: <input type="text" name="rem_info_bankName"> <br /><br />
                <input type="submit" value="Remove" name="removeSubmit"></p>
            </form>
        </div>
        <div class="insert_accounts">
            <h3>Insert Client's Bank Account</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="insertClientAccQueryRequest" name="insertClientAccQueryRequest">
                AccountNumber: <input type="text" name="acc_Num"> <br /><br />
                ClientID: <input type="text" name="acc_clientID"> <br /><br />
                Bank Name: <input type="text" name="acc_bankName"> <br /><br />
                Balance: <input type="text" name="acc_bal"> <br /><br />
                Transit Number: <input type="text" name="acc_transitNum"> <br /><br />
                <input type="submit" value="Insert" name="insertSubmit"></p>
            </form>
        </div>
        <div class="remove_accounts">
            <h3>Remove Client's Bank Account</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="removeClientAccQueryRequest" name="removeClientAccQueryRequest">
                AccountNumber: <input type="text" name="rem_acc_Num"> <br /><br />
                ClientID: <input type="text" name="rem_acc_clientID"> <br /><br />
                <input type="submit" value="Remove" name="removeSubmit"></p>
            </form>
            <p>All bank accounts associated to a customer must be removed before removing that customer.</p>
        </div>
        <div class="display_accounts">
            <h3>Display Client Accounts</h3>
            <form method="GET" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="displayAccRequest" name="displayAccRequest">
                <input type="submit" name="displayAccounts"></p>
            </form>
        </div>
    </div>

    <hr />

    <h2 style="text-align: center;">Portfolio Management</h2>
    <div class="client_management">
        <div class="insert_portfolio">
            <h3>Insert Client's Portfolio</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="insertPortfolioQueryRequest" name="insertPortfolioQueryRequest">
                PortfolioID: <input type="text" name="ins_pfl_ID"> <br /><br />
                ClientID: <input type="text" name="ins_pfl_clientID"> <br /><br />
                Return Rate: <input type="text" name="ins_pfl_returnRate"> <br /><br />
                Balance: <input type="text" name="ins_pfl_balance"> <br /><br />
                Profit: <input type="text" name="ins_pfl_profit"> <br /><br />
                <!--the rest of the attributes will be calculated using aggregation -->
                <input type="submit" value="Insert" name="insertSubmit"></p>
            </form>
        </div>
        <div class="remove_portfolio">
            <h3>Remove Client's Portfolio</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="removePortfolioQueryRequest" name="removePortfolioQueryRequest">
                PortfolioID: <input type="text" name="rem_pfl_ID"> <br /><br />
                ClientID: <input type="text" name="rem_pfl_clientID"> <br /><br />
                <input type="submit" value="Remove" name="removeSubmit"></p>
            </form>
        </div>
        <div class="display_portfolio">
            <h3>Display Client's Portfolio</h3>
            <form method="GET" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="displayPortfolioRequest" name="displayPortfolioRequest">
                <input type="submit" name="displayPortfolios"></p>
            </form>
        </div>
        <div class="insert_manager">
            <h3>Insert Portfolio Manager</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="insertManagerQueryRequest" name="insertManagerQueryRequest">
                ManagerID: <input type="text" name="ins_mng_ID"> <br /><br />
                Manager Name: <input type="text" name="ins_mng_Name"> <br /><br />
                <!--the rest of the attributes will be calculated using aggregation -->
                <input type="submit" value="Insert" name="insertSubmit"></p>
            </form>
        </div>
        <div class="remove_manager">
            <h3>Remove Portfolio Manager</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="removeManagerQueryRequest" name="removeManagerQueryRequest">
                ManagerID: <input type="text" name="rem_mng_ID"> <br /><br />
                Manager Name: <input type="text" name="rem_mng_Name"> <br /><br />
                <!--the rest of the attributes will be calculated using aggregation -->
                <input type="submit" value="Remove" name="removeSubmit"></p>
            </form>
        </div>
    </div>
    <div class="client_management">
        <div class="assign_portfolio">
            <h3>Assign Portfolio to Manager</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="assignPortfolioQueryRequest" name="assignPortfolioQueryRequest">
                ManagerID: <input type="text" name="ass_mng_ID"> <br /><br />
                PortfolioID: <input type="text" name="ass_pfl_ID"> <br /><br />
                <!--the rest of the attributes will be calculated using aggregation -->
                <input type="submit" value="Assign" name="insertSubmit"></p>
            </form>
        </div>
        <div class="display_senior_manager">
            <h3>Display Senior Manager</h3>
            <form method="GET" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="displaySeniorManagerRequest" name="displaySeniorManagerRequest">
                <!--the rest of the attributes will be calculated using aggregation -->
                <input type="submit" value="Submit" name="displaySeniority"></p>
            </form>
        </div>
        <div class="display_manager_performance">
            <h3>Display Manager Portfolio Count</h3>
            <form method="GET" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="displayManagerPerformanceRequest" name="displayManagerPerformanceRequest">
                <!--the rest of the attributes will be calculated using aggregation -->
                <input type="submit" value="Submit" name="displayPerformance"></p>
            </form>
        </div>
        <div class="display_best_manager">
            <h3>Display Top 3 Stocks Picked By Best Managers</h3>
            <form method="GET" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="displayBestManagerRequest" name="displayBestManagerRequest">
                <!--the rest of the attributes will be calculated using aggregation -->
                <input type="submit" value="Submit" name="displayBest"></p>
            </form>
        </div>
        <div class="update_portfolio_assignment">
            <h3>Delegate Portfolio to another Manager</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="delegatePortfolioQueryRequest" name="delegatePortfolioQueryRequest">
                PortfolioID: <input type="text" name="dlg_pfl_ID"> <br /><br />
                Old ManagerID: <input type="text" name="dlg_oldmng_ID"> <br /><br />
                New ManagerID: <input type="text" name="dlg_newmng_ID"> <br /><br />
                <!--the rest of the attributes will be calculated using aggregation -->
                <input type="submit" value="Delegate" name="updateSubmit"></p>
            </form>
        </div>
        <div class="view_assignment">
            <h3>View Portfolio assignment</h3>
            <form method="GET" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="viewAssignmentRequest" name="viewAssignmentRequest">
                <input type="submit" name="displayAssignments"></p>
            </form>
        </div>
    </div>

    <hr />

    <h2 style="text-align: center;">Companies & Stock Exchanges</h2>
    <div class="client_management">
        <div class="insert_Company">
            <h3>Insert Company Info</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="insertCompanyQueryRequest" name="insertCompanyQueryRequest">
                CompanyID: <input type="text" name="ins_com_ID"> <br /><br />
                Company Name: <input type="text" name="ins_com_Name"> <br /><br />
                <!--the rest of the attributes will be calculated using aggregation -->
                <input type="submit" value="Insert" name="insertSubmit"></p>
            </form>
        </div>
        <div class="remove_Company">
            <h3>Remove Company Info</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="removeCompanyQueryRequest" name="removeCompanyQueryRequest">
                CompanyID: <input type="text" name="rem_com_ID"> <br /><br />
                <!--the rest of the attributes will be calculated using aggregation -->
                <input type="submit" value="Remove" name="removeSubmit"></p>
            </form>
        </div>
        <div class="insert_SELocation">
            <h3>Insert Stock Exchange Location</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="insertSELocationQueryRequest" name="insertSELocationQueryRequest">
                Stock Exchange Name: <input type="text" name="ins_loc_Name"> <br /><br />
                City: <input type="text" name="ins_loc_City"> <br /><br />
                Country: <input type="text" name="ins_loc_Country"> <br /><br />
                <!--the rest of the attributes will be calculated using aggregation -->
                <input type="submit" value="Insert" name="insertSubmit"></p>
            </form>
        </div>
        <div class="insert_StockExchange">
            <h3>Insert Stock Exchange</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="insertSEQueryRequest" name="insertSEQueryRequest">
                Stock Exchange ID: <input type="text" name="ins_se_ID"> <br /><br />
                Name: <input type="text" name="ins_se_Name"> <br /><br />
                City: <input type="text" name="ins_se_City"> <br /><br />
                <input type="submit" value="Insert" name="insertSubmit"></p>
            </form>
        </div>
        <div class="remove_StockExchange">
            <h3>Remove Stock Exchange</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="removeSEQueryRequest" name="removeSEQueryRequest">
                SEID: <input type="text" name="rem_se_ID"> <br /><br />
                <input type="submit" value="Remove" name="removeSubmit"></p>
            </form>
        </div>
    </div>

    <hr />

    <h2 style="text-align: center;">Securities & Trading</h2>
    <div class="client_management">
        <div class="insert_Security">
            <h3>Insert Security Info</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="insertSecurityQueryRequest" name="insertSecurityQueryRequest">
                Ticker Symbol: <input type="text" name="ins_sec_TS"> <br /><br />
                Stock Exchange ID: <input type="text" name="ins_sec_SEID"> <br /><br />
                Company ID: <input type="text" name="ins_sec_ComName"> <br /><br />
                <input type="submit" value="Insert" name="insertSubmit"></p>
            </form>
        </div>
        <div class="display_Security">
            <h3>View Securities</h3>
            <form method="GET" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="viewSecuritiesRequest" name="viewSecuritiesRequest">
                <input type="submit" name="displaySecurities"></p>
            </form>
        </div>
        <div class="insert_Stock">
            <h3>Insert Stock</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="insertStockQueryRequest" name="insertStockQueryRequest">
                Ticker Symbol: <input type="text" name="ins_stk_TS"> <br /><br />
                Stock Exchange ID: <input type="text" name="ins_stk_SEID"> <br /><br />
                Cost per Share: <input type="text" name="ins_stk_CPS"> <br /><br />
                Shares Outstanding: <input type="text" name="ins_stk_SO"> <br /><br />
                <!-- AGGREGATION NEEDED FOR TOTAL DIVIDENDS -->
                <input type="submit" value="Insert" name="insertSubmit"></p>
            </form>
        </div>
        <div class="insert_Options">
            <h3>Insert Options</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="insertOptionsQueryRequest" name="insertOptionsQueryRequest">
                Ticker Symbol: <input type="text" name="ins_opt_TS"> <br /><br />
                Stock Exchange ID: <input type="text" name="ins_opt_SEID"> <br /><br />
                Expiry Date: <input type="text" name="ins_opt_Expiry"> <br /><br />
                <input type="submit" value="Insert" name="insertSubmit"></p>
            </form>
        </div>
    </div>
    <div class="client_management">
        <div class="select_com_se">
            <h3 style="text-align:center">Select Stock or Options</h3>
            <form method="POST" action="investment.php">
                <input type="hidden" id="selectStockOptionQueryRequest" name="selectStockOptionQueryRequest">
                Stock: <input type="checkbox" name="sel_cb_stk">
                Options <input type="checkbox" name="sel_cb_opt"><br /><br />
                <br>
                Ticker Symbol <input type="checkbox" name="formGeneral[]" value='TickerSymbol'>
                Stock Exchange ID <input type="checkbox" name="formGeneral[]" value='SEID'><br /><br />
                <br>
                <div class="selection_col">
                    <div class="sel_stk_part">
                        <p>If selected stock: </p>
                        Cost Per Share <input type="checkbox" name="formStock[]" value='cost_per_share'><br /><br />
                        Share Outstanding <input type="checkbox" name="formStock[]" value='shares_outstanding'><br /><br />
                    </div>
                    <div class="sel_opt_part">
                        <p>If selected option: </p>
                        Expiry Date <input type="checkbox" name="sel_cb_EX"><br /><br />
                    </div>
                </div>
                <br>
                <p>Condition</p>
                    <div class="cond_com_part">
                        Cost Per Share > $200: <input type="checkbox" name="condition_cps"><br /><br />
                    </div>
                <!--the rest of the attributes will be calculated using aggregation -->
                <input type="submit" value="Select" name="insertSubmit"></p>
            </form>
        </div>
    </div>
    <div class="client_management">
        <div class="create_Order">
            <h3>Create an order</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="createOrderQueryRequest" name="createOrderQueryRequest">
                OrderID: <input type="text" name="cre_ord_ID"> <br /><br />
                Price per unit: <input type="text" name="cre_ord_PPU"> <br /><br />
                Quantity: <input type="text" name="cre_ord_QTY"> <br /><br />
                Total Amount: <input type="text" name="cre_ord_TTL"> <br /><br />
                Order Type: <input type="text" name="cre_ord_Type"> <br /><br />
                <input type="submit" value="Insert" name="insertSubmit"></p>
            </form>
        </div>
        <div class="view_Order">
            <h3>View Orders</h3>
            <form method="GET" action="investment.php">
                <!--refresh page when submitted-->
                OrderID: <input type="checkbox" name="formOrder[]" value="OrderID"> <br /><br />
                Price per unit: <input type="checkbox" name="formOrder[]" value="price_per_unit"> <br /><br />
                Quantity: <input type="checkbox" name="formOrder[]" value="quantity"> <br /><br />
                Total Amount: <input type="checkbox" name="formOrder[]" value="total_amount"> <br /><br />
                Order Type: <input type="checkbox" name="formOrder[]" value="order_type"> <br /><br />
                <input type="hidden" id="viewOrderRequest" name="viewOrderRequest">
                <input type="submit" name="displayOrders"></p>
            </form>
        </div>
        <div class="make_Order">
            <h3>Make Order for Client</h3>
            <form method="POST" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="makeOrderQueryRequest" name="makeOrderQueryRequest">
                Manager ID: <input type="text" name="mke_ord_MID"> <br /><br />
                Order ID: <input type="text" name="mke_ord_OID"> <br /><br />
                TickerSymbol: <input type="text" name="mke_ord_TS"> <br /><br />
                Stock Exchange ID: <input type="text" name="mke_ord_SEID"> <br /><br />
                Porfolio ID: <input type="text" name="mke_ord_PID"> <br /><br />
                Order Date: <input type="text" name="mke_ord_Date"> <br /><br />
                <input type="submit" value="Insert" name="insertSubmit"></p>
            </form>
        </div>
        <div class="view_C_Order">
            <h3>View Client Orders</h3>
            <form method="GET" action="investment.php">
                <!--refresh page when submitted-->
                <input type="hidden" id="viewClientOrderRequest" name="viewClientOrderRequest">
                <input type="submit" name="displayClientOrders"></p>
            </form>
        </div>
    </div>

    <hr />

    <?php
    //this tells the system that it's no longer just parsing html; it's now parsing PHP

    $success = True; //keep track of errors so it redirects the page only if there are no errors
    $db_conn = NULL; // edit the login credentials in connectToDB()
    $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())

    function debugAlertMessage($message)
    {
        global $show_debug_alert_messages;

        if ($show_debug_alert_messages) {
            echo "<script type='text/javascript'>alert('" . $message . "');</script>";
        }
    }

    function executePlainSQL($cmdstr)
    { //takes a plain (no bound variables) SQL command and executes it
        //echo "<br>running ".$cmdstr."<br>";
        global $db_conn, $success;

        $statement = OCIParse($db_conn, $cmdstr);
        //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work

        if (!$statement) {
            echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
            $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
            echo htmlentities($e['message']);
            $success = False;
        }

        $r = OCIExecute($statement, OCI_DEFAULT);
        if (!$r) {
            echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
            $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
            echo htmlentities($e['message']);
            $success = False;
        }

        return $statement;
    }

    function executeBoundSQL($cmdstr, $list)
    {
        /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
		In this case you don't need to create the statement several times. Bound variables cause a statement to only be
		parsed once and you can reuse the statement. This is also very useful in protecting against SQL injection.
		See the sample code below for how this function is used */

        global $db_conn, $success;
        $statement = OCIParse($db_conn, $cmdstr);

        if (!$statement) {
            echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
            $e = OCI_Error($db_conn);
            echo htmlentities($e['message']);
            $success = False;
        }

        foreach ($list as $tuple) {
            foreach ($tuple as $bind => $val) {
                //echo $val;
                //echo "<br>".$bind."<br>";
                OCIBindByName($statement, $bind, $val);
                unset($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                echo htmlentities($e['message']);
                echo "<br>";
                $success = False;
            }
        }
    }

    function printResult($result, $table_names)
    { //prints results from a select statement
        echo "<br>Retrieved data: " . $table_names[0] . "<br>";
        echo "<table>";
        echo "<tr>";
        for ($i = 1; $i < count($table_names); $i++) {
            echo "<th>" . $table_names[$i] . "</th>";
        }
        echo "</tr>";

        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr>";
            for ($i = 0; $i < count($row); $i++) {
                echo "<td style='text-align:center'>" . $row[$i] . "</td>"; //or just use "echo $row[0]"
            }
            echo "</tr>";
        }

        echo "</table>";
    }

    function connectToDB()
    {
        global $db_conn;

        // Your username is ora_(CWL_ID) and the password is a(student number). For example,
        // ora_platypus is the username and a12345678 is the password.

        $db_conn = OCILogon("ora_ynwin1", "a97097349", "dbhost.students.cs.ubc.ca:1522/stu");

        if ($db_conn) {
            debugAlertMessage("Database is Connected");
            return true;
        } else {
            debugAlertMessage("Cannot connect to Database");
            $e = OCI_Error(); // For OCILogon errors pass no handle
            echo htmlentities($e['message']);
            return false;
        }
    }

    function disconnectFromDB()
    {
        global $db_conn;

        debugAlertMessage("Disconnect from Database");
        OCILogoff($db_conn);
    }

    function handleResetRequest()
    {
        global $db_conn;
        // Drop old tables
        executePlainSQL("DROP TABLE manages_Portfolio CASCADE CONSTRAINTS");
        executePlainSQL("DROP TABLE investsIn_Portfolio CASCADE CONSTRAINTS");
        executePlainSQL("DROP TABLE hasA_BankAccount CASCADE CONSTRAINTS");
        executePlainSQL("DROP TABLE Client CASCADE CONSTRAINTS");
        executePlainSQL("DROP TABLE Bank_Institution_Num CASCADE CONSTRAINTS");
        executePlainSQL("DROP TABLE PortfolioManager CASCADE CONSTRAINTS");
        executePlainSQL("DROP TABLE StockExchange CASCADE CONSTRAINTS");
        executePlainSQL("DROP TABLE SE_Location CASCADE CONSTRAINTS");
        executePlainSQL("DROP TABLE Company_Info CASCADE CONSTRAINTS");
        executePlainSQL("DROP TABLE Security_offeredBy_Company CASCADE CONSTRAINTS");
        executePlainSQL("DROP TABLE Stock CASCADE CONSTRAINTS");
        executePlainSQL("DROP TABLE Options CASCADE CONSTRAINTS");
        executePlainSQL("DROP TABLE Trade CASCADE CONSTRAINTS");
        executePlainSQL("DROP TABLE Makes CASCADE CONSTRAINTS");
        executePlainSQL("DROP VIEW top_managers");
        // Create new tables
        echo "<br> Resetting all the tables <br>";

        executePlainSQL("CREATE TABLE Client 
        (
            ClientID char(20) PRIMARY KEY,
            client_name char(40),
            client_address char(80)
        )");

        executePlainSQL("CREATE TABLE Bank_Institution_Num 
        (
            bank_name char(20) PRIMARY KEY,
            institution_num char(3)
        )");

        executePlainSQL("CREATE TABLE hasA_BankAccount 
        (
            AccountNumber CHAR(16) PRIMARY KEY,
            ClientID CHAR(20) NOT NULL,
            bank_name CHAR(20),
            balance DOUBLE PRECISION,
            transit_num CHAR(5),
            FOREIGN KEY (ClientID) REFERENCES Client(ClientID),-- ON UPDATE CASCADE NOT SUPPORTED IN ORACLE
            FOREIGN KEY (bank_name) REFERENCES Bank_Institution_Num(bank_name) ON DELETE CASCADE
        )");

        executePlainSQL("CREATE TABLE investsIn_Portfolio 
        (
            PortfolioID CHAR(20) PRIMARY KEY,
            ClientID CHAR(20) NOT NULL,
            return_rate DOUBLE PRECISION DEFAULT 0.00,
            balance DOUBLE PRECISION DEFAULT 0.00,
            profit_loss DOUBLE PRECISION DEFAULT 0.00,
            FOREIGN KEY (ClientID) REFERENCES Client(ClientID)
        )");

        executePlainSQL("CREATE TABLE PortfolioManager 
        (
            ManagerID char(20) PRIMARY KEY,
            manager_name char(40)
        )");

        executePlainSQL("CREATE TABLE manages_Portfolio
        (
            ManagerID CHAR(20),
            PortfolioID CHAR(20),
            PRIMARY KEY (ManagerID, PortfolioID),
            FOREIGN KEY (ManagerID) REFERENCES PortfolioManager(ManagerID),
            FOREIGN KEY (PortfolioID) REFERENCES investsIn_Portfolio(PortfolioID)
        )");

        executePlainSQL("CREATE TABLE SE_Location
        (
            se_name CHAR(40),
            city CHAR(40),
            country CHAR(40),
            PRIMARY KEY (se_name, city)
        )");

        executePlainSQL("CREATE TABLE StockExchange
        (
            SEID CHAR(4) PRIMARY KEY,
            se_name CHAR(40),
            city CHAR(40),
            FOREIGN KEY (se_name, city) REFERENCES SE_Location(se_name, city) ON DELETE CASCADE
        )");

        executePlainSQL("CREATE TABLE Company_Info
        (
            CompanyID CHAR(40) PRIMARY KEY,
            company_name CHAR(40)
        )");

        executePlainSQL("CREATE TABLE Security_offeredBy_Company
        (
            TickerSymbol CHAR(5),
            SEID CHAR(4),
            CompanyID CHAR(40) UNIQUE NOT NULL, -- enforces one to one (UNIQUE) and total (NOT NULL) participation with the companies
            PRIMARY KEY (TickerSymbol, SEID),
            FOREIGN KEY (SEID) REFERENCES StockExchange(SEID) ON DELETE CASCADE, -- weak entity, thus if stock exchange is deleted, security must be deleted 
            FOREIGN KEY (CompanyID) REFERENCES Company_Info(CompanyID) ON DELETE CASCADE
        )");

        executePlainSQL("CREATE TABLE Stock
        (
            TickerSymbol CHAR(5),
            SEID CHAR(4),
            cost_per_share DOUBLE PRECISION DEFAULT 0.00,
            shares_outstanding INTEGER DEFAULT 0,
            PRIMARY KEY (TickerSymbol, SEID),
            FOREIGN KEY (TickerSymbol, SEID) REFERENCES Security_offeredBy_Company(TickerSymbol, SEID)
        )");

        executePlainSQL("CREATE TABLE Options
        (
            TickerSymbol CHAR(5),
            SEID CHAR(4),
            expiryDate CHAR(10),
            PRIMARY KEY (TickerSymbol, SEID),
            FOREIGN KEY (TickerSymbol, SEID) REFERENCES Security_offeredBy_Company(TickerSymbol, SEID)
        )");

        executePlainSQL("CREATE TABLE Trade
        (
            OrderID CHAR(20) PRIMARY KEY,
            price_per_unit DOUBLE PRECISION,
            quantity INTEGER,
            total_amount DOUBLE PRECISION,
            order_type CHAR(40)
        )");

        executePlainSQL("CREATE TABLE Makes
        (
            ManagerID CHAR(20),
            OrderID CHAR(20),
            TickerSymbol CHAR(5),
            SEID CHAR(4),
            PortfolioID CHAR(20),
            order_date CHAR(10),
            PRIMARY KEY (ManagerID, OrderID, PortfolioID, TickerSymbol, SEID),
            FOREIGN KEY (ManagerID, PortfolioID) REFERENCES manages_Portfolio(ManagerID, PortfolioID),
            FOREIGN KEY (OrderID) REFERENCES Trade(OrderID),
            FOREIGN KEY (TickerSymbol, SEID) REFERENCES Security_offeredBy_Company(TickerSymbol, SEID)
        )");

        executePlainSQL(
            "CREATE VIEW top_managers AS
                SELECT ManagerID, AVG(profit_loss) as average
                FROM (
                    -- get profit loss of managers
                    SELECT PortfolioManager.ManagerID, profit_loss
                    FROM PortfolioManager, manages_Portfolio, investsIn_Portfolio 
                    WHERE PortfolioManager.ManagerID = manages_Portfolio.ManagerID and investsIn_Portfolio.PortfolioID = manages_Portfolio.PortfolioID
                    )
                GROUP BY ManagerID
                ORDER BY average DESC
                FETCH FIRST 3 ROWS ONLY"
        );

        OCICommit($db_conn);
    }

    function handleReloadRequest()
    {
        global $db_conn;
        handleResetRequest();

        executePlainSQL("insert into Client values ('APJ225901', 'Kaoru Mitoma', '2254 West 4th Avenue')");
        executePlainSQL("insert into Client values ('CKI911763', 'Erling Haaland', '5959 Student Union Blvd')");
        executePlainSQL("insert into Client values ('BDQ610099', 'Jorginho', '2129 Robson St')");
        executePlainSQL("insert into Client values ('HVT178836', 'Darwin Nunez', '4108 Tolmie St')");
        executePlainSQL("insert into Client values ('EDA760910', 'Aaron Ramsdale', '3390 Cordova St')");
        executePlainSQL("insert into Client values ('BGC301882', 'Jordan Ayew', '22 Nootka St')");

        executePlainSQL("insert into investsIn_Portfolio values ('PID19054', 'CKI911763', 2.2, 31000, 5210.5)");
        executePlainSQL("insert into investsIn_Portfolio values ('PID22087', 'EDA760910', 10, 5600, 110.6)");
        executePlainSQL("insert into investsIn_Portfolio values ('PID00411', 'HVT178836', -20, 129000, -5000.5)");
        executePlainSQL("insert into investsIn_Portfolio values ('PID00003', 'BGC301882', 7.7, 900000, 339.3)");
        executePlainSQL("insert into investsIn_Portfolio values ('PID81119', 'BDQ610099', -13.4, 34000, -2900.5)");
        executePlainSQL("insert into investsIn_Portfolio values ('PID48776', 'APJ225901', 5, 2890.38, 1864.39)");
        executePlainSQL("insert into investsIn_Portfolio values ('PID61739', 'HVT178836', 5.4, 498.33, 10.2)");
        executePlainSQL("insert into investsIn_Portfolio values ('PID98001', 'APJ225901', 7.7, 713.9, 339.3)");
        executePlainSQL("insert into investsIn_Portfolio values ('PID33770', 'CKI911763', -0.4, -59.8, -4.8)");
        executePlainSQL("insert into investsIn_Portfolio values ('PID63765', 'APJ225901', 36.9, 3506.2, 705.19)");


        executePlainSQL("insert into Bank_Institution_Num values ('BMO', '001')");
        executePlainSQL("insert into Bank_Institution_Num values ('TD', '004')");
        executePlainSQL("insert into Bank_Institution_Num values ('RBC', '003')");
        executePlainSQL("insert into Bank_Institution_Num values ('Scotiabank', '002')");
        executePlainSQL("insert into Bank_Institution_Num values ('HSBC', '016')");
        executePlainSQL("insert into Bank_Institution_Num values ('CIBC', '010')");

        executePlainSQL("insert into hasA_BankAccount values ('ACN54890', 'CKI911763', 'BMO', 5800.5, 'BM279')");
        executePlainSQL("insert into hasA_BankAccount values ('ACN07556', 'HVT178836', 'Scotiabank', 500, 'SC541')");
        executePlainSQL("insert into hasA_BankAccount values ('ACN22876', 'EDA760910', 'BMO', 330.3,'BM279')");
        executePlainSQL("insert into hasA_BankAccount values ('ACN81145', 'BGC301882', 'TD', 9410.1, 'TD980')");
        executePlainSQL("insert into hasA_BankAccount values ('ACN67709', 'BDQ610099', 'RBC', 454, 'RB716')");
        executePlainSQL("insert into hasA_BankAccount values ('ACN51516', 'APJ225901', 'RBC', 8659.4, 'RB716')");
        executePlainSQL("insert into hasA_BankAccount values ('ACN93340', 'APJ225901', 'CIBC', 250.3, 'CI991')");
        executePlainSQL("insert into hasA_BankAccount values ('ACN52599', 'EDA760910', 'HSBC', 11400.1, 'HS187')");
        executePlainSQL("insert into hasA_BankAccount values ('ACN10080', 'BDQ610099', 'TD', 6820.9, 'TD980')");
        executePlainSQL("insert into hasA_BankAccount values ('ACN30176', 'EDA760910', 'Scotiabank', 69.6, 'SC541')");

        executePlainSQL("insert into PortfolioManager values ('MID00001', 'Pep Guardiola')");
        executePlainSQL("insert into PortfolioManager values ('MID00433', 'Steven Gerrard')");
        executePlainSQL("insert into PortfolioManager values ('MID98871', 'Frank Lampard')");
        executePlainSQL("insert into PortfolioManager values ('MID37610', 'Marco Silva')");
        executePlainSQL("insert into PortfolioManager values ('MID59109', 'Jurgen Klopp')");
        executePlainSQL("insert into PortfolioManager values ('MID27184', 'Mikel Arteta')");

        executePlainSQL("insert into manages_Portfolio values ('MID98871', 'PID19054')");
        executePlainSQL("insert into manages_Portfolio values ('MID59109', 'PID00411')");
        executePlainSQL("insert into manages_Portfolio values ('MID00001', 'PID48776')");
        executePlainSQL("insert into manages_Portfolio values ('MID37610', 'PID22087')");
        executePlainSQL("insert into manages_Portfolio values ('MID27184', 'PID00003')");
        executePlainSQL("insert into manages_Portfolio values ('MID00433', 'PID81119')");
        executePlainSQL("insert into manages_Portfolio values ('MID00001', 'PID61739')");
        executePlainSQL("insert into manages_Portfolio values ('MID37610', 'PID63765')");
        executePlainSQL("insert into manages_Portfolio values ('MID27184', 'PID33770')");
        executePlainSQL("insert into manages_Portfolio values ('MID00001', 'PID98001')");
        executePlainSQL("insert into manages_Portfolio values ('MID00001', 'PID19054')");
        executePlainSQL("insert into manages_Portfolio values ('MID00001', 'PID00411')");
        executePlainSQL("insert into manages_Portfolio values ('MID00001', 'PID22087')");
        executePlainSQL("insert into manages_Portfolio values ('MID00001', 'PID00003')");
        executePlainSQL("insert into manages_Portfolio values ('MID00001', 'PID81119')");
        executePlainSQL("insert into manages_Portfolio values ('MID00001', 'PID63765')");
        executePlainSQL("insert into manages_Portfolio values ('MID00001', 'PID33770')");

        executePlainSQL("insert into Trade values ('OID78489', 341.7, 100, 34170, 'Stock')");
        executePlainSQL("insert into Trade values ('OID32301', 78.8, 1000, 78800, 'Stock')");
        executePlainSQL("insert into Trade values ('OID81817', 460, 10, 4600, 'Stock')");
        executePlainSQL("insert into Trade values ('OID96987', 20, 1000, 20000, 'Option')");
        executePlainSQL("insert into Trade values ('OID41091', 239.3, 20, 478.6, 'Stock')");
        executePlainSQL("insert into Trade values ('OID00011', 4, 2000, 8000, 'Option')");
        executePlainSQL("insert into Trade values ('OID00013', 30.3, 50, 1515, 'Stock')");
        executePlainSQL("insert into Trade values ('OID00014', 30.3, 50, 1515, 'Stock')");
        executePlainSQL("insert into Trade values ('OID00015', 327.8, 8, 2622.4, 'Stock')");
        executePlainSQL("insert into Trade values ('OID00016', 327.8, 8, 2622.4, 'Stock')");
        executePlainSQL("insert into Trade values ('OID00017', 327.8, 8, 2622.4, 'Stock')");

        executePlainSQL("insert into SE_Location values ('New York Stock Exchange', 'New York', 'United States')");
        executePlainSQL("insert into SE_Location values ('London Stock Exchange', 'London', 'England')");
        executePlainSQL("insert into SE_Location values ('Nasdaq Stock Exchange', 'New York', 'United States')");
        executePlainSQL("insert into SE_Location values ('Shanghai Stock Exchange', 'Shanghai', 'China')");
        executePlainSQL("insert into SE_Location values ('Frankfurt Stock Exchange', 'Frankfurt', 'Germany')");
        executePlainSQL("insert into SE_Location values ('Hong Kong Stock Exchange', 'Hong Kong', 'Hong Kong')");

        executePlainSQL("insert into StockExchange values ('NYSE', 'New York Stock Exchange', 'New York')");
        executePlainSQL("insert into StockExchange values ('LDSE', 'London Stock Exchange', 'London')");
        executePlainSQL("insert into StockExchange values ('NSDQ', 'Nasdaq Stock Exchange', 'New York')");
        executePlainSQL("insert into StockExchange values ('SHSE', 'Shanghai Stock Exchange', 'Shanghai')");
        executePlainSQL("insert into StockExchange values ('FKSE', 'Frankfurt Stock Exchange', 'Frankfurt')");
        executePlainSQL("insert into StockExchange values ('HKSE', 'Hong Kong Stock Exchange', 'Hong Kong')");

        executePlainSQL("insert into Company_Info values ('CID00519', 'Apple Inc')");
        executePlainSQL("insert into Company_Info values ('CID21881', 'Microsoft Corporation')");
        executePlainSQL("insert into Company_Info values ('CID29897', 'Alphabet Inc Class A')");
        executePlainSQL("insert into Company_Info values ('CID20075', 'Alibaba Group Holding Ltd')");
        executePlainSQL("insert into Company_Info values ('CID68091', 'Walmart Inc')");
        executePlainSQL("insert into Company_Info values ('CID50107', 'Visa Inc')");

        executePlainSQL("insert into Security_offeredBy_Company values ('AAPL', 'NYSE', 'CID00519')");
        executePlainSQL("insert into Security_offeredBy_Company values ('MSFT', 'NSDQ', 'CID21881')");
        executePlainSQL("insert into Security_offeredBy_Company values ('GOOG', 'NSDQ', 'CID29897')");
        executePlainSQL("insert into Security_offeredBy_Company values ('BABA', 'SHSE', 'CID20075')");
        executePlainSQL("insert into Security_offeredBy_Company values ('WMT', 'LDSE', 'CID68091')");
        executePlainSQL("insert into Security_offeredBy_Company values ('V', 'FKSE', 'CID50107')");

        executePlainSQL("insert into Stock values ('AAPL', 'NYSE', 341.7, 5410221.7)");
        executePlainSQL("insert into Stock values ('MSFT', 'NSDQ', 460, 6442134.9)");
        executePlainSQL("insert into Stock values ('GOOG', 'NSDQ', 1200.1, 7600934.8)");
        executePlainSQL("insert into Stock values ('BABA', 'SHSE', 78.8, 4599871.5)");
        executePlainSQL("insert into Stock values ('WMT', 'LDSE', 239.3, 4981717.5)");
        executePlainSQL("insert into Stock values ('V', 'FKSE', 130.8, 2998173)");

        executePlainSQL("insert into Options values ('AAPL', 'NYSE', '04/05/2025')");
        executePlainSQL("insert into Options values ('MSFT', 'NSDQ', '22/06/2026')");
        executePlainSQL("insert into Options values ('GOOG', 'NSDQ', '15/01/2023')");
        executePlainSQL("insert into Options values ('BABA', 'SHSE', '21/11/2025')");
        executePlainSQL("insert into Options values ('WMT', 'LDSE', '06/02/2027')");
        executePlainSQL("insert into Options values ('V', 'FKSE', '31/10/2025')");

        executePlainSQL("insert into Makes values ('MID00001', 'OID78489', 'AAPL', 'NYSE', 'PID48776', '07/26/2022')");
        executePlainSQL("insert into Makes values ('MID00433', 'OID32301', 'BABA', 'SHSE', 'PID81119', '06/11/2020')");
        executePlainSQL("insert into Makes values ('MID98871', 'OID81817', 'MSFT', 'NSDQ', 'PID19054', '11/08/2021')");
        executePlainSQL("insert into Makes values ('MID37610', 'OID96987', 'GOOG', 'NSDQ', 'PID22087', '02/01/2021')");
        executePlainSQL("insert into Makes values ('MID59109', 'OID41091', 'WMT', 'LDSE', 'PID00411', '05/31/2022')");
        executePlainSQL("insert into Makes values ('MID27184', 'OID00011', 'V', 'FKSE', 'PID00003', '01/28/2022')");
        executePlainSQL("insert into Makes values ('MID98871', 'OID00013', 'V', 'FKSE', 'PID19054', '01/28/2022')");
        executePlainSQL("insert into Makes values ('MID98871', 'OID00014', 'V', 'FKSE', 'PID19054', '01/28/2022')");
        executePlainSQL("insert into Makes values ('MID98871', 'OID00015', 'GOOG', 'NSDQ', 'PID19054', '01/28/2022')");
        executePlainSQL("insert into Makes values ('MID98871', 'OID00016', 'GOOG', 'NSDQ', 'PID19054', '01/28/2022')");
        executePlainSQL("insert into Makes values ('MID98871', 'OID00017', 'GOOG', 'NSDQ', 'PID19054', '01/28/2022')");

        OCICommit($db_conn);
    }

    function handleInsertClientRequest()
    {
        global $db_conn;

        //Getting the values from user and insert data into the table
        $tuple = array(
            ":bind1" => $_POST['ins_client_ID'],
            ":bind2" => $_POST['ins_client_Name'],
            ":bind3" => $_POST['ins_client_Address']
        );

        $alltuples = array(
            $tuple
        );

        executeBoundSQL("insert into Client values (:bind1, :bind2, :bind3)", $alltuples);
        OCICommit($db_conn);
    }

    function handleRemoveClientRequest()
    {
        global $db_conn;

        $client_ID = $_POST['rem_client_ID'];
        $client_name = $_POST['rem_client_Name'];

        executePlainSQL("DELETE FROM Client WHERE ClientID = '" . $client_ID . "' AND client_name = '" . $client_name . "'");
        echo "Client " . $client_name . " with ID " . $client_ID . " has been successfully removed.";
        OCICommit($db_conn);
    }

    function handleUpdateClientRequest()
    {
        global $db_conn;

        $client_ID = $_POST['upd_client_ID'];
        $client_new_name = $_POST['upd_new_client_Name'];
        $client_new_address = $_POST['upd_new_client_Address'];

        if (!empty($client_new_name)) {
            executePlainSQL("UPDATE Client SET client_name='" . $client_new_name . "' WHERE ClientID = '" . $client_ID . "'");
        }

        if (!empty($client_new_address)) {
            executePlainSQL("UPDATE Client SET client_address='" . $client_new_address . "' WHERE ClientID = '" . $client_ID . "'");
        }
        OCICommit($db_conn);
    }

    function handleDisplayGivenClientRequest()
    {
        // SELECT/JOIN/PROJECTION
        $client_ID = $_GET['ret_client_ID'];
        $name = executePlainSQL("SELECT client_name FROM Client WHERE ClientID = '" . $client_ID . "'");
        $address = executePlainSQL("SELECT client_address FROM Client WHERE ClientID = '" . $client_ID . "'");
        $balance = executePlainSQL("SELECT SUM(balance) FROM hasA_BankAccount WHERE ClientID = '" . $client_ID . "'");
        if (($row = oci_fetch_row($name)) != false) {
            echo "Name - " . $row[0] . "";
        }
        if (($row = oci_fetch_row($address)) != false) {
            echo "<br>Address - " . $row[0] . "";
        }
        if (($row = oci_fetch_row($balance)) != false) {
            echo "<br>Total Bank Balance - " . $row[0] . "";
        }
        echo "<br><br> Client's portfolio details are shown below.";
        $pfl_data = executePlainSQL(
            "SELECT I.PortfolioID, manager_name, balance, profit_loss
            FROM investsIn_Portfolio I, manages_Portfolio M, PortfolioManager P
            WHERE I.PortfolioID =  M.PortfolioID AND I.ClientID = '" . $client_ID . "' AND P.ManagerID = M.ManagerID"
        );
        $table_names = array("Portfolios", "Portfolio ID", "Manager", "Balance", "Profit/Loss");
        printResult($pfl_data, $table_names);
    }

    function handleFindClientOnHavingOrdersRequest()
    {
        $client_profit = $_GET['fin_profit'];
        $client_count = $_GET['fin_count'];
        $result = executePlainSQL("SELECT client_name, MAX(profit_loss) 
          FROM investsIn_Portfolio I, Client C 
          WHERE profit_loss >= " . $client_profit . " AND C.ClientID = I.ClientID 
          GROUP BY client_name HAVING COUNT(*) >= " . $client_count . "");
        echo "Below is a list of clients who owns at least " . $client_count . " portfolio(s) with a profit more than " . $client_profit . " dollars.";
        $table_names = array("Clients and their maximum profit", "Client Name", "Maximum Profit");
        printResult($result, $table_names);
    }

    function handleInsertBankInfoRequest()
    {
        global $db_conn;

        //Getting the values from user and insert data into the table
        $tuple = array(
            ":bind1" => $_POST['info_bankName'],
            ":bind2" => $_POST['info_instiNum']
        );

        $alltuples = array(
            $tuple
        );

        executeBoundSQL("insert into Bank_Institution_Num values (:bind1, :bind2)", $alltuples);
        OCICommit($db_conn);
    }

    function handleRemoveBankInfoRequest()
    {
        global $db_conn;

        $bank_Name = $_POST['rem_info_bankName'];;

        executePlainSQL("DELETE FROM Bank_Institution_Num WHERE bank_name = '" . $bank_Name . "'");
        echo "The bank " . $bank_Name . " has been successfully removed.";
        OCICommit($db_conn);
    }

    function handleInsertClientAccRequest()
    {
        global $db_conn;

        //Getting the values from user and insert data into the table
        $tuple = array(
            ":bind1" => $_POST['acc_Num'],
            ":bind2" => $_POST['acc_clientID'],
            ":bind3" => $_POST['acc_bankName'],
            ":bind4" => $_POST['acc_bal'],
            ":bind5" => $_POST['acc_transitNum'],
        );

        $alltuples = array(
            $tuple
        );

        executeBoundSQL("insert into hasA_BankAccount values (:bind1, :bind2, :bind3, :bind4, :bind5)", $alltuples);
        OCICommit($db_conn);
    }

    function handleRemoveClientAccRequest()
    {
        global $db_conn;

        $client_accNum = $_POST['rem_acc_Num'];
        $client_ID = $_POST['rem_acc_clientID'];

        executePlainSQL("DELETE FROM hasA_BankAccount WHERE AccountNumber = '" . $client_accNum . "' AND ClientID = '" . $client_ID . "'");
        echo "Client's account number " . $client_accNum . " with ID " . $client_ID . " has been successfully removed.";
        OCICommit($db_conn);
    }

    function handleInsertPortfolioRequest()
    {
        global $db_conn;

        //Getting the values from user and insert data into the table
        $tuple = array(
            ":bind1" => $_POST['ins_pfl_ID'],
            ":bind2" => $_POST['ins_pfl_clientID'],
            ":bind3" => $_POST['ins_pfl_returnRate'],
            ":bind4" => $_POST['ins_pfl_balance'],
            ":bind5" => $_POST['ins_pfl_profit'],
        );

        $alltuples = array(
            $tuple
        );

        executeBoundSQL("insert into investsIn_Portfolio values (:bind1, :bind2, :bind3, :bind4, :bind5)", $alltuples);
        OCICommit($db_conn);
    }

    function handleRemovePortfolioRequest()
    {
        global $db_conn;

        $pfl_ID = $_POST['rem_pfl_ID'];
        $pfl_clientID = $_POST['rem_pfl_clientID'];

        executePlainSQL("DELETE FROM investsIn_Portfolio WHERE PortfolioID = '" . $pfl_ID . "' AND ClientID = '" . $pfl_clientID . "'");
        echo "Portfolio ID " . $pfl_ID . " with Client ID " . $pfl_clientID . " has been successfully removed.";
        OCICommit($db_conn);
    }

    function handleInsertManagerRequest()
    {
        global $db_conn;

        //Getting the values from user and insert data into the table
        $tuple = array(
            ":bind1" => $_POST['ins_mng_ID'],
            ":bind2" => $_POST['ins_mng_Name'],
        );

        $alltuples = array(
            $tuple
        );

        executeBoundSQL("insert into PortfolioManager values (:bind1, :bind2)", $alltuples);
        OCICommit($db_conn);
    }

    function handleRemoveManagerRequest()
    {
        global $db_conn;

        $mng_ID = $_POST['rem_mng_ID'];
        $mng_Name = $_POST['rem_mng_Name'];

        executePlainSQL("DELETE FROM investsIn_Portfolio WHERE ManagerID = '" . $mng_ID . "' AND manager_name = '" . $mng_Name . "'");
        echo "Manager " . $mng_Name . " with ID " . $mng_ID . " has been successfully removed.";
        OCICommit($db_conn);
    }

    function handleAssignPortfolioRequest()
    {
        global $db_conn;

        //Getting the values from user and insert data into the table
        $tuple = array(
            ":bind1" => $_POST['ass_mng_ID'],
            ":bind2" => $_POST['ass_pfl_ID'],
        );

        $alltuples = array(
            $tuple
        );

        executeBoundSQL("insert into manages_Portfolio values (:bind1, :bind2)", $alltuples);
        executePlainSQL("CREATE ASSERTION CheckTotalPortfolio CHECK (NOT EXISTS ((SELECT PortfolioID FROM investsIn_Portfolio) EXCEPT (SELECT PortfolioID FROM manages_Portfolio)))");
        OCICommit($db_conn);
    }

    function handleDelegatePortfolioRequest()
    {
        global $db_conn;

        $pfl_ID = $_POST['dlg_pfl_ID'];
        $mng_old_ID = $_POST['dlg_oldmng_ID'];
        $mng_new_ID = $_POST['dlg_newmng_ID'];

        executePlainSQL("UPDATE manages_Portfolio SET ManagerID='" . $mng_new_ID . "' WHERE PortfolioID = '" . $pfl_ID . "' AND ManagerID = '" . $mng_old_ID . "'");
        echo $pfl_ID . " with Manager ID " . $mng_old_ID . " has been delegated to " . $mng_new_ID;
        OCICommit($db_conn);
    }

    function handleInsertSELocationRequest()
    {
        global $db_conn;

        //Getting the values from user and insert data into the table
        $tuple = array(
            ":bind1" => $_POST['ins_loc_Name'],
            ":bind2" => $_POST['ins_loc_City'],
            ":bind3" => $_POST['ins_loc_Country']
        );

        $alltuples = array(
            $tuple
        );

        executeBoundSQL("insert into SE_Location values (:bind1, :bind2, :bind3)", $alltuples);
        OCICommit($db_conn);
    }

    function handleInsertSERequest()
    {
        global $db_conn;

        //Getting the values from user and insert data into the table
        $tuple = array(
            ":bind1" => $_POST['ins_se_ID'],
            ":bind2" => $_POST['ins_se_Name'],
            ":bind3" => $_POST['ins_se_City']
        );

        $alltuples = array(
            $tuple
        );

        executeBoundSQL("insert into StockExchange values (:bind1, :bind2, :bind3)", $alltuples);
        OCICommit($db_conn);
    }

    function handleRemoveSERequest()
    {
        global $db_conn;

        $se_ID = $_POST['rem_se_ID'];

        executePlainSQL("DELETE FROM StockExchange WHERE SEID = '" . $se_ID . "'");
        echo "Stock Exchange with ID " . $se_ID . " has been successfully removed.";
        OCICommit($db_conn);
    }

    function handleInsertCompanyRequest()
    {
        global $db_conn;

        //Getting the values from user and insert data into the table
        $tuple = array(
            ":bind1" => $_POST['ins_com_ID'],
            ":bind2" => $_POST['ins_com_Name'],
        );

        $alltuples = array(
            $tuple
        );

        executeBoundSQL("insert into Company_Info values (:bind1, :bind2)", $alltuples);
        OCICommit($db_conn);
    }

    function handleRemoveCompanyRequest()
    {
        global $db_conn;

        $com_ID = $_POST['rem_com_ID'];

        executePlainSQL("DELETE FROM Company_Info WHERE SEID = '" . $com_ID . "'");
        echo "Company with ID " . $com_ID . " has been successfully removed.";
        OCICommit($db_conn);
    }

    function handleInsertSecurityRequest()
    {
        global $db_conn;

        //Getting the values from user and insert data into the table
        $tuple = array(
            ":bind1" => $_POST['ins_sec_TS'],
            ":bind2" => $_POST['ins_sec_SEID'],
            ":bind3" => $_POST['ins_sec_ComName']
        );

        $alltuples = array(
            $tuple
        );

        executeBoundSQL("insert into Security_offeredBy_Company values (:bind1, :bind2, :bind3)", $alltuples);
        OCICommit($db_conn);
    }

    function handleInsertStockRequest()
    {
        global $db_conn;

        //Getting the values from user and insert data into the table
        $tuple = array(
            ":bind1" => $_POST['ins_stk_TS'],
            ":bind2" => $_POST['ins_stk_SEID'],
            ":bind3" => $_POST['ins_stk_CPS'],
            ":bind4" => $_POST['ins_stk_SO'],
        );

        $alltuples = array(
            $tuple
        );

        executeBoundSQL("insert into Stock values (:bind1, :bind2, :bind3, :bind4)", $alltuples);
        OCICommit($db_conn);
    }

    function handleInsertOptionsRequest()
    {
        global $db_conn;

        //Getting the values from user and insert data into the table
        $tuple = array(
            ":bind1" => $_POST['ins_opt_TS'],
            ":bind2" => $_POST['ins_opt_SEID'],
            ":bind3" => $_POST['ins_opt_Expiry']
        );

        $alltuples = array(
            $tuple
        );

        executeBoundSQL("insert into Options values (:bind1, :bind2, :bind3)", $alltuples);
        OCICommit($db_conn);
    }

    function handleSelectStockOptionRequest() {
        global $execution;
        global $table_names;
        $selected_A1 = $_POST['formGeneral'];
        $selected_A2 = $_POST['formStock'];
        if (isset($_POST['sel_cb_stk'])) {
            $title = array("Stocks");
            $table_names = array_merge($title, $selected_A1, $selected_A2);
            $selected_attributes = array_merge($selected_A1, $selected_A2);
            if (empty($selected_attributes)) {exit("You did not select any attributes.");}
            if (sizeof($selected_attributes) == 1) {
                $execution = "SELECT $selected_attributes[0] ";
            } else if (sizeof($selected_attributes) == 2) {
                $execution = "SELECT $selected_attributes[0], $selected_attributes[1] ";
            } else if (sizeof($selected_attributes) == 3) {
                $execution = "SELECT $selected_attributes[0], $selected_attributes[1], $selected_attributes[2] ";
            } else if (sizeof($selected_attributes) == 4) {
                $execution = "SELECT $selected_attributes[0], $selected_attributes[1], $selected_attributes[2], $selected_attributes[3] ";
            }
        } else if (isset($_POST['sel_cb_opt'])) {
            echo "Choosing options";
            $title = array("Options");
            if (isset($_POST['sel_cb_EX'])) {
                $selected_A3 = array('expiryDate');
                $table_names = array_merge($title, $selected_A1, $selected_A3);
                $selected_attributes = array_merge($selected_A1, $selected_A3);
            } else {
                $table_names = array_merge($title, $selected_A1);
                $selected_attributes = $selected_A1;
            }
            if (empty($selected_attributes)) {exit("You did not select any attributes.");}
            if (sizeof($selected_attributes) == 1) {
                $execution = "SELECT $selected_attributes[0] ";
            } else if (sizeof($selected_attributes) == 2) {
                $execution = "SELECT $selected_attributes[0], $selected_attributes[1] ";
            } else if (sizeof($selected_attributes) == 3) {
                $execution = "SELECT $selected_attributes[0], $selected_attributes[1], $selected_attributes[2] ";
            }
        } else {
            exit("User needs to select either stock OR option.");
        }

        if (isset($_POST['sel_cb_stk'])) {
            $execution .= "FROM Stock ";
            if (isset($_POST['condition_cps'])) {
                $execution .= "WHERE cost_per_share > 200";
            }
        } else {
            $execution .= "FROM Options";
        }

        $result = executePlainSQL($execution);
        printResult($result, $table_names);
    }

    function handleDisplayOrdersRequest()
    {
        global $db_conn;
        $title = array("Orders");
        $checked_a = $_GET['formOrder'];
        $table_names = array_merge($title, $checked_a);
        if (empty($checked_a)) {
            exit("You did not select any attributes.");
        }
        global $arr_size;
        if (sizeof($checked_a) == 1) {
            $arr_size = "SELECT $checked_a[0] FROM Trade";
        } else if ((sizeof($checked_a) == 2)) {
            $arr_size = "SELECT $checked_a[0], $checked_a[1] FROM Trade";
        } else if ((sizeof($checked_a) == 3)) {
            $arr_size = "SELECT $checked_a[0], $checked_a[1], $checked_a[2] FROM Trade";
        } else if ((sizeof($checked_a) == 4)) {
            $arr_size = "SELECT $checked_a[0], $checked_a[1], $checked_a[2], $checked_a[3] FROM Trade";
        } else {
            $arr_size = "SELECT $checked_a[0], $checked_a[1], $checked_a[2], $checked_a[3], $checked_a[4] FROM Trade";
        }
        $result = executePlainSQL($arr_size);
        printResult($result, $table_names);
    }

    function handleCreateOrderRequest()
    {
        global $db_conn;

        //Getting the values from user and insert data into the table
        $tuple = array(
            ":bind1" => $_POST['cre_ord_ID'],
            ":bind2" => $_POST['cre_ord_PPU'],
            ":bind3" => $_POST['cre_ord_QTY'],
            ":bind4" => $_POST['cre_ord_TTL'],
            ":bind5" => $_POST['cre_ord_Type'],
        );

        $alltuples = array(
            $tuple
        );

        executeBoundSQL("insert into Trade values (:bind1, :bind2, :bind3, :bind4, :bind5)", $alltuples);
        OCICommit($db_conn);
    }

    function handleMakeOrderRequest()
    {
        global $db_conn;

        //Getting the values from user and insert data into the table
        $tuple = array(
            ":bind1" => $_POST['mke_ord_MID'],
            ":bind2" => $_POST['mke_ord_OID'],
            ":bind3" => $_POST['mke_ord_TS'],
            ":bind4" => $_POST['mke_ord_SEID'],
            ":bind5" => $_POST['mke_ord_PID'],
            ":bind6" => $_POST['mke_ord_Date'],
        );

        $alltuples = array(
            $tuple
        );

        executeBoundSQL("insert into Makes values (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6)", $alltuples);
        executePlainSQL("CREATE ASSERTION CheckTotalOrder CHECK (NOT EXISTS ((SELECT OrderID FROM Trade) EXCEPT (SELECT PortfolioID FROM Makes)))");
        executePlainSQL("CREATE ASSERTION CheckTotalTicker CHECK (NOT EXISTS ((SELECT TickerSymbol FROM Security_offeredBy_Company) EXCEPT (SELECT TickerSymbol FROM Makes)))");
        executePlainSQL("CREATE ASSERTION CheckTotalSEID CHECK (NOT EXISTS ((SELECT SEID FROM Security_offeredBy_Company) EXCEPT (SELECT SEID FROM Makes)))");

        OCICommit($db_conn);
    }

    function handleCountRequest()
    {
        global $db_conn;

        $result = executePlainSQL("SELECT Count(*) FROM Client");

        if (($row = oci_fetch_row($result)) != false) {
            echo "<br> The number of clients: " . $row[0] . "<br>";
        }
    }

    function handleDisplayRequest()
    {
        global $db_conn;
        $table_names = array("Clients", "Client ID", "Name", "Address");

        $result = executePlainSQL("SELECT * FROM Client");
        printResult($result, $table_names);
    }

    function handleDisplayAccRequest()
    {
        global $db_conn;
        $table_names = array("Client Bank Accounts", "Name", "Client ID", "Account Number", "Bank Name", "Institution Number", "Transit Number", "Balance");

        $result = executePlainSQL(
            "SELECT client_name, Client.ClientID, AccountNumber, Bank_Institution_Num.bank_name, institution_num, transit_num, balance
            FROM hasA_BankAccount, Client, Bank_Institution_Num
            WHERE Client.ClientID = hasA_BankAccount.ClientID and Bank_Institution_Num.bank_name = hasA_BankAccount.bank_name"
        );
        printResult($result, $table_names);
    }

    function handleDisplayPortfolioRequest()
    {
        global $db_conn;
        $table_names = array("Client Portfolios", "Name", "Client ID", "Manager Name", "Manager ID", "PortfolioID", "Balance", "Profit/Loss", "Return Rate");

        $result = executePlainSQL(
            "SELECT client_name, Client.ClientID, manager_name, PortfolioManager.ManagerID, investsIn_Portfolio.PortfolioID, balance, profit_loss, return_rate
            FROM investsIn_Portfolio, Client, manages_Portfolio, PortfolioManager
            WHERE Client.ClientID = investsIn_Portfolio.ClientID and PortfolioManager.ManagerID = manages_Portfolio.ManagerID and investsIn_Portfolio.PortfolioID = manages_Portfolio.PortfolioID"
        );
        printResult($result, $table_names);
    }

    function handleViewPortfolioAssignmentRequest()
    {
        global $db_conn;
        $table_names = array("Portfolio Assignments", "Manager ID", "Manager Name", "Client ID", "Client Name", "Portfolio ID");

        $result = executePlainSQL(
            "SELECT PortfolioManager.ManagerID, manager_name, Client.ClientID, client_name, investsIn_Portfolio.PortfolioID
            FROM manages_Portfolio, PortfolioManager, investsIn_Portfolio, Client
            WHERE PortfolioManager.ManagerID = manages_Portfolio.ManagerID and investsIn_Portfolio.PortfolioID = manages_Portfolio.PortfolioID and Client.ClientID = investsIn_Portfolio.ClientID
            ORDER BY investsIn_Portfolio.PortfolioID asc"
        );
        printResult($result, $table_names);
    }

    function handleDisplayManagerPerformanceRequest()
    {
        global $db_conn;
        $table_names = array("Manager Portfolio Count", "Manager Name", "Manager ID", "Portfolio Count");

        $result = executePlainSQL(
            "SELECT manager_name, manages_Portfolio.ManagerID, COUNT(manages_Portfolio.PortfolioID)
            FROM manages_Portfolio, PortfolioManager
            WHERE PortfolioManager.ManagerID = manages_Portfolio.ManagerID
            GROUP BY manager_name, manages_Portfolio.ManagerID"
        );

        printResult($result, $table_names);
    }

    function handleDisplayTopStockPicks()
    {
        global $db_conn;
        $table_names = array("Top 3 Stock Picks By Best Managers", "Ticker Symbol", "Stock Exchange", "# of orders made by best 3 managers");

        $result = executePlainSQL(
            "SELECT TickerSymbol, SEID, COUNT(*) as count
            FROM 
            (
                SELECT Stock.TickerSymbol, Stock.SEID, Stock.cost_per_share, Stock.shares_outstanding
                FROM Stock, Makes, top_managers -- top_managers is a view which gets top 3 managers by average profit_loss on all portfolios
                WHERE top_managers.ManagerID = Makes.ManagerID AND Stock.TickerSymbol = Makes.TickerSymbol AND Stock.SEID = Makes.SEID
            )
            GROUP BY TickerSymbol, SEID
            ORDER BY count DESC
            FETCH FIRST 3 ROWS ONLY"
        );

        printResult($result, $table_names);
    }

    function handleDisplaySeniorPortfolioManager()
    {
        global $db_conn;
        $table_names = array("Senior Manager", "Manager Name", "Manager ID");
        //A senior manager that manages all portfolios
        $result = executePlainSQL(
            "SELECT PortfolioManager.manager_name, PortfolioManager.ManagerID
                        FROM PortfolioManager
                        WHERE NOT EXISTS(SELECT investsIn_Portfolio.PortfolioID
                                         FROM investsIn_Portfolio
                                         WHERE NOT EXISTS(SELECT manages_Portfolio.PortfolioID
                                                          FROM manages_Portfolio
                                                          WHERE manages_Portfolio.ManagerID = PortfolioManager.ManagerID and 
                                                                investsIn_Portfolio.PortfolioID = manages_Portfolio.PortfolioID))"
        );

        printResult($result, $table_names);
    }

    function handleDisplaySecuritiesRequest()
    {
        global $db_conn;
        $table_names = array("Securities", "Company ID", "Name", "Ticker Symbol", "Stock Exchange");

        $result = executePlainSQL(
            "SELECT Company_Info.CompanyID, company_name, TickerSymbol, SEID
            FROM Security_offeredBy_Company, Company_Info
            WHERE Company_Info.CompanyID = Security_offeredBy_Company.CompanyID"
        );
        printResult($result, $table_names);
    }

    function handleDisplayClientOrdersRequest()
    {
        global $db_conn;
        $table_names = array("Client Orders", "Manager ID", "Manager Name", "Client ID", "Client Name", "Portfolio ID", "Order ID", "Ticker Symbol", "Stock Exchange ID", "Price per unit", "Quantity", "Total Amount", "Order Type", "Order Date");

        $result = executePlainSQL(
            "SELECT Makes.ManagerID, manager_name, Client.ClientID, client_name, 
            Makes.PortfolioID, Makes.OrderID, TickerSymbol, SEID, price_per_unit, quantity, total_amount, order_type, order_date
            FROM Makes, PortfolioManager, Client, Trade, manages_Portfolio, investsIn_Portfolio
            WHERE Makes.ManagerID = manages_Portfolio.ManagerID and
            Makes.ManagerID = PortfolioManager.ManagerID and
            Makes.PortfolioID = manages_Portfolio.PortfolioID and
            Trade.OrderID = Makes.OrderID and
            Client.ClientID = investsIn_Portfolio.ClientID and
            investsIn_Portfolio.PortfolioID = Makes.PortfolioID"
        );
        printResult($result, $table_names);
    }

    // HANDLE ALL POST ROUTES
    // A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
    function handlePOSTRequest()
    {
        if (connectToDB()) {
            if (array_key_exists('resetTablesRequest', $_POST)) {
                handleResetRequest();
            } else if (array_key_exists('reloadTablesRequest', $_POST)) {
                handleReloadRequest();
            } else if (array_key_exists('insertClientQueryRequest', $_POST)) {
                handleInsertClientRequest();
            } else if (array_key_exists('removeClientQueryRequest', $_POST)) {
                handleRemoveClientRequest();
            } else if (array_key_exists('updateClientQueryRequest', $_POST)) {
                handleUpdateClientRequest();
            } else if (array_key_exists('insertBankInfoQueryRequest', $_POST)) {
                handleInsertBankInfoRequest();
            } else if (array_key_exists('removeBankInfoQueryRequest', $_POST)) {
                handleRemoveBankInfoRequest();
            } else if (array_key_exists('insertClientAccQueryRequest', $_POST)) {
                handleInsertClientAccRequest();
            } else if (array_key_exists('removeClientAccQueryRequest', $_POST)) {
                handleRemoveClientAccRequest();
            } else if (array_key_exists('insertPortfolioQueryRequest', $_POST)) {
                handleInsertPortfolioRequest();
            } else if (array_key_exists('removePortfolioQueryRequest', $_POST)) {
                handleRemovePortfolioRequest();
            } else if (array_key_exists('insertManagerQueryRequest', $_POST)) {
                handleInsertManagerRequest();
            } else if (array_key_exists('removeManagerQueryRequest', $_POST)) {
                handleRemoveManagerRequest();
            } else if (array_key_exists('assignPortfolioQueryRequest', $_POST)) {
                handleAssignPortfolioRequest();
            } else if (array_key_exists('delegatePortfolioQueryRequest', $_POST)) {
                handleDelegatePortfolioRequest();
            } else if (array_key_exists('insertSELocationQueryRequest', $_POST)) {
                handleInsertSELocationRequest();
            } else if (array_key_exists('insertSEQueryRequest', $_POST)) {
                handleInsertSERequest();
            } else if (array_key_exists('removeSEQueryRequest', $_POST)) {
                handleRemoveSERequest();
            } else if (array_key_exists('insertCompanyQueryRequest', $_POST)) {
                handleInsertCompanyRequest();
            } else if (array_key_exists('removeCompanyQueryRequest', $_POST)) {
                handleRemoveCompanyRequest();
            } else if (array_key_exists('insertSecurityQueryRequest', $_POST)) {
                handleInsertSecurityRequest();
            } else if (array_key_exists('insertStockQueryRequest', $_POST)) {
                handleInsertStockRequest();
            } else if (array_key_exists('insertOptionsQueryRequest', $_POST)) {
                handleInsertOptionsRequest();
            } else if (array_key_exists('createOrderQueryRequest', $_POST)) {
                handleCreateOrderRequest();
            } else if (array_key_exists('makeOrderQueryRequest', $_POST)) {
                handleMakeOrderRequest();
            } else if (array_key_exists('selectStockOptionQueryRequest', $_POST)) {
                handleSelectStockOptionRequest();
            }
            disconnectFromDB();
        }
    }

    // HANDLE ALL GET ROUTES
    // A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
    function handleGETRequest()
    {
        if (connectToDB()) {
            if (array_key_exists('displayClients', $_GET)) {
                handleDisplayRequest();
            } else if (array_key_exists('countTuples', $_GET)) {
                handleCountRequest();
            } else if (array_key_exists('displayAccounts', $_GET)) {
                handleDisplayAccRequest();
            } else if (array_key_exists('displayPortfolios', $_GET)) {
                handleDisplayPortfolioRequest();
            } else if (array_key_exists('retrieveClient', $_GET)) {
                handleDisplayGivenClientRequest();
            } else if (array_key_exists('displayAssignments', $_GET)) {
                handleViewPortfolioAssignmentRequest();
            } else if (array_key_exists('displayPerformance', $_GET)) {
                handleDisplayManagerPerformanceRequest();
            } else if (array_key_exists('displayBest', $_GET)) {
                handleDisplayTopStockPicks();
            } else if (array_key_exists('displaySeniority', $_GET)) {
                handleDisplaySeniorPortfolioManager();
            } else if (array_key_exists('displaySecurities', $_GET)) {
                handleDisplaySecuritiesRequest();
            } else if (array_key_exists('displayOrders', $_GET)) {
                handleDisplayOrdersRequest();
            } else if (array_key_exists('displayClientOrders', $_GET)) {
                handleDisplayClientOrdersRequest();
            } else if (array_key_exists('findClient', $_GET)) {
                handleFindClientOnHavingOrdersRequest();
            }
            disconnectFromDB();
        }
    }

    //

    if (isset($_POST['reset']) || isset($_POST['reload']) || isset($_POST['updateSubmit']) || isset($_POST['insertSubmit']) || isset($_POST['removeSubmit'])) {
        handlePOSTRequest();
    } else if (
        isset($_GET['countTupleRequest']) || isset($_GET['displayClientRequest']) || isset($_GET['displayAccRequest']) || isset($_GET['displayPortfolioRequest'])
        || isset($_GET['retrieveClientRequest']) || isset($_GET['displayManagerPerformanceRequest']) || isset($_GET['displayBestManagerRequest']) || isset($_GET['displaySeniorManagerRequest']) || isset($_GET['viewAssignmentRequest'])
        || isset($_GET['viewSecuritiesRequest']) || isset($_GET['viewOrderRequest']) || isset($_GET['viewClientOrderRequest']) || isset($_GET['findClientRequest'])
    ) {
        handleGETRequest();
    }
    ?>
</body>
<footer>
    <p>All Rights Reserved | CPSC304 - Group 28 @ 2022</p>
</footer>

</html>