    CREATE TABLE Client
    (
        ClientID char(20) PRIMARY KEY,
        client_name char(40),
        client_address char(80)
    )
    
    CREATE TABLE investsIn_Portfolio
    (
        PortfolioID CHAR(20) PRIMARY KEY,
        ClientID CHAR(20) NOT NULL,
        return_rate DOUBLE PRECISION DEFAULT 0.00,
        balance DOUBLE PRECISION DEFAULT 0.00,
        profit_loss DOUBLE PRECISION DEFAULT 0.00,
        FOREIGN KEY (ClientID) REFERENCES Client(ClientID)
    )

    CREATE TABLE hasA_BankAccount 
    (
        AccountNumber CHAR(16) PRIMARY KEY,
        ClientID CHAR(20) NOT NULL,
        bank_name CHAR(20),
        balance DOUBLE PRECISION,
        transit_num CHAR(5),
        FOREIGN KEY (ClientID) REFERENCES Client(ClientID),
        FOREIGN KEY (bank_name) REFERENCES Bank_Institution_Num(bank_name) ON DELETE CASCADE
    )

    CREATE TABLE Bank_Institution_Num 
    (
        bank_name CHAR(20) PRIMARY KEY,
        institution_num CHAR(3),
    )

    CREATE TABLE PortfolioManager 
    (
        ManagerID CHAR(20) PRIMARY KEY,
        manager_name CHAR(40)
    )

    CREATE TABLE manages_Portfolio
    (
        ManagerID CHAR(20),
        PortfolioID CHAR(20),
        PRIMARY KEY (ManagerID, PortfolioID),
        FOREIGN KEY (ManagerID) REFERENCES PortfolioManager(ManagerID),
        FOREIGN KEY (PortfolioID) REFERENCES investsIn_Portfolio(PortfolioID)
    )

    CREATE TABLE Trade
    (
        OrderID CHAR(20) PRIMARY KEY,
        price_per_unit DOUBLE PRECISION,
        quantity INTEGER,
        total_amount DOUBLE PRECISION,
        order_type CHAR(40)
    )

    CREATE TABLE StockExchange 
    (
        SEID CHAR(4) PRIMARY KEY,
        se_name CHAR(40),
        city CHAR(40),
        FOREIGN KEY (se_name, city) REFERENCES SE_Location(se_name, city) ON DELETE CASCADE

    CREATE TABLE SE_Location
    (
        se_name CHAR(40),
        city CHAR(40),
        country CHAR(40),
        PRIMARY KEY (se_name, city)
    )

    CREATE TABLE Company_Info
    (
        CompanyID CHAR(40) PRIMARY KEY,
        company_name CHAR(40),
    )

    CREATE TABLE Security_offeredBy_Company
    (
        TickerSymbol CHAR(5),
        SEID CHAR(4),
        CompanyID CHAR(40) UNIQUE NOT NULL, -- enforces one to one (UNIQUE) and total (NOT NULL) participation with the companies
        PRIMARY KEY (TickerSymbol, SEID),
        FOREIGN KEY (SEID) REFERENCES StockExchange(SEID) ON DELETE CASCADE, -- weak entity, thus if stock exchange is deleted, security must be deleted 
        FOREIGN KEY (CompanyID) REFERENCES Company_Info(CompanyID) ON DELETE CASCADE
    )

    CREATE TABLE Stock
    (
        TickerSymbol CHAR(5),
        SEID CHAR(4),
        cost_per_share DOUBLE PRECISION DEFAULT 0.00,
        shares_outstanding INTEGER DEFAULT 0,
        PRIMARY KEY (TickerSymbol, SEID),
        FOREIGN KEY (TickerSymbol, SEID) REFERENCES Security_offeredBy_Company(TickerSymbol, SEID)
    )

    CREATE TABLE Options
    (
        TickerSymbol CHAR(5),
        SEID CHAR(4),
        expiryDate CHAR(10),
        PRIMARY KEY (TickerSymbol, SEID),
        FOREIGN KEY (TickerSymbol, SEID) REFERENCES Security_offeredBy_Company(TickerSymbol, SEID)
    )

    CREATE TABLE Makes
    (
        ManagerID CHAR(20),
        OrderID CHAR(40),
        TickerSymbol CHAR(5), 
        SEID CHAR(4),
        PortfolioID CHAR(20),
        order_date CHAR(10),
        PRIMARY KEY (ManagerID, OrderID, TickerSymbol, SEID),
        FOREIGN KEY (ManagerID, PortfolioID) REFERENCES manages_Portfolio(ManagerID, PortfolioID),
        FOREIGN KEY (OrderID) REFERENCES Trade(OrderID),
        FOREIGN KEY (TickerSymbol, SEID) REFERENCES Security_offeredBy_Company(TickerSymbol, SEID)
    )

    -- INSERT STATEMENTS

    INSERT INTO Client("APJ225901", "Kaoru Mitoma", "2254 West 4th Avenue")
    INSERT INTO Client("CKI911763", "Erling Haaland", "5959 Student Union Blvd")
    INSERT INTO Client("BDQ610099", "Jorginho", "2129 Robson St")
    INSERT INTO Client("HVT178836", "Darwin Nunez", "4108 Tolmie St")
    INSERT INTO Client("EDA760910", "Aaron Ramsdale", "3390 Cordova St")
    INSERT INTO Client("BGC301882", "Jordan Ayew", "22 Nootka St")

    INSERT INTO investsIn_Portfolio("PID19054", 22.9, 31000, 5210.5, "CKI911763")
    INSERT INTO investsIn_Portfolio("PID22087", 1.6, 82.7, 110.6, "EDA760910")
    INSERT INTO investsIn_Portfolio("PID00411", 76.88, -311.2, -50.5, "HVT178836")
    INSERT INTO investsIn_Portfolio("PID00003", 7.7, 713.9, 339.3, "BGC301882")
    INSERT INTO investsIn_Portfolio("PID81119", 13.4, -48.5, -2.5, "BDQ610099")
    INSERT INTO investsIn_Portfolio("PID48776", 36.9, 2890.38, 1864.39, "APJ225901")
    INSERT INTO investsIn_Portfolio("PID61739", 5.4, 498.33, 10.2, "HVT178836")
    INSERT INTO investsIn_Portfolio("PID98001", 7.7, 713.9, 339.3, "APJ225901")
    INSERT INTO investsIn_Portfolio("PID33770", -0.4, -59.8, -4.8, "CKI911763")
    INSERT INTO investsIn_Portfolio("PID63765", 36.9, 3506.2, 705.19, "APJ225901")

    INSERT INTO hasA_BankAccount("ACN54890", 5800.5, "BMO", "BM279", "CKI911763")
    INSERT INTO hasA_BankAccount("ACN07556", 20.4, "Scotiabank", "SC541", "HVT178836")
    INSERT INTO hasA_BankAccount("ACN22876", 330.3, "BMO", "BM279", "EDA760910")
    INSERT INTO hasA_BankAccount("ACN81145", 9410.1, "TD", "TD980", "BGC301882")
    INSERT INTO hasA_BankAccount("ACN67709", 454, "RBC", "RB716", "BDQ610099")
    INSERT INTO hasA_BankAccount("ACN51516", 8659.4, "RBC", "RB716", "APJ225901")
    INSERT INTO hasA_BankAccount("ACN93340", 250.3, "CIBC", "CI991", "APJ225901")
    INSERT INTO hasA_BankAccount("ACN52599", 11400.1, "HSBC", "HS187", "EDA760910")
    INSERT INTO hasA_BankAccount("ACN10080", 6820.9, "TD", "TD980", "BDQ610099")
    INSERT INTO hasA_BankAccount("ACN30176", 69.6, "Scotiabank", "SC541", "EDA760910")

    INSERT INTO Bank_Institution_Num("BMO", "001")
    INSERT INTO Bank_Institution_Num("TD", "004")
    INSERT INTO Bank_Institution_Num("RBC", "003")
    INSERT INTO Bank_Institution_Num("Scotiabank", "002")
    INSERT INTO Bank_Institution_Num("HSBC", "016")
    INSERT INTO Bank_Institution_Num("CIBC", "010")

    INSERT INTO PortfolioManager("MID00001", "Pep Guardiola")
    INSERT INTO PortfolioManager("MID00433", "Steven Gerrard")
    INSERT INTO PortfolioManager("MID98871", "Frank Lampard")
    INSERT INTO PortfolioManager("MID37610", "Marco Silva")
    INSERT INTO PortfolioManager("MID59109", "Jurgen Klopp")
    INSERT INTO PortfolioManager("MID27184", "Mikel Arteta")

    INSERT INTO manages_Portfolio("MID98871", "PID19054")
    INSERT INTO manages_Portfolio("MID59109", "PID00411")
    INSERT INTO manages_Portfolio("MID00001", "PID48776")
    INSERT INTO manages_Portfolio("MID37610", "PID22087")
    INSERT INTO manages_Portfolio("MID27184", "PID00003")
    INSERT INTO manages_Portfolio("MID00433", "PID81119")
    INSERT INTO manages_Portfolio("MID00001", "PID61739")
    INSERT INTO manages_Portfolio("MID37610", "PID63765")
    INSERT INTO manages_Portfolio("MID27184", "PID33770")
    INSERT INTO manages_Portfolio("MID00001", "PID98001")
    INSERT INTO manages_Portfolio("MID00001", "PID19054")
    INSERT INTO manages_Portfolio("MID00001", "PID00411")
    INSERT INTO manages_Portfolio("MID00001", "PID22087")
    INSERT INTO manages_Portfolio("MID00001", "PID00003")
    INSERT INTO manages_Portfolio("MID00001", "PID81119")
    INSERT INTO manages_Portfolio("MID00001", "PID63765")
    INSERT INTO manages_Portfolio("MID00001", "PID33770")
        
    INSERT INTO Trade("OID00012", 30.3, 50, 1515, "Stock")
    INSERT INTO Trade("OID41091", 2.3, 700, 1610, "Stock")
    INSERT INTO Trade("OID96987", 327.8, 8, 2622.4, "Option")
    INSERT INTO Trade("OID81817", 11.9, 480, 5712, "Stock")
    INSERT INTO Trade("OID32301", 187, 38, 7106, "Option")
    INSERT INTO Trade("OID78489", 1264.5, 22, 27819, "Stock")
    INSERT INTO Trade("OID78489", 1264.5, 22, 27819, "Stock")
    INSERT INTO Trade("OID00013", 30.3, 50, 1515, "Stock") -- new
    INSERT INTO Trade("OID00014", 30.3, 50, 1515, "Stock") -- new
    INSERT INTO Trade("OID00015", 327.8, 8, 2622.4, "Stock") -- new
    INSERT INTO Trade("OID00016", 327.8, 8, 2622.4, "Stock") -- new
    INSERT INTO Trade("OID00017", 327.8, 8, 2622.4, "Stock") -- new


    INSERT INTO StockExchange("NYSE", "New York Stock Exchange", "New York")
    INSERT INTO StockExchange("LDSE", "London Stock Exchange", "London")
    INSERT INTO StockExchange("NSDQ", "Nasdaq Stock Exchange", "New York")
    INSERT INTO StockExchange("SHSE", "Shanghai Stock Exchange", "Shanghai")
    INSERT INTO StockExchange("FKSE", "Frankfurt Stock Exchange", "Frankfurt")
    INSERT INTO StockExchange("HKSE", "Hong Kong Stock Exchange", "Hong Kong")

    INSERT INTO SE_Location("New York Stock Exchange", "New York", "United States")
    INSERT INTO SE_Location("London Stock Exchange", "London", "England")
    INSERT INTO SE_Location("Nasdaq Stock Exchange", "New York", "United States")
    INSERT INTO SE_Location("Shanghai Stock Exchange", "Shanghai", "China")
    INSERT INTO SE_Location("Frankfurt Stock Exchange", "Frankfurt", "Germany")
    INSERT INTO SE_Location("Hong Kong Stock Exchange", "Hong Kong", "Hong Kong")

    INSERT INTO Company_Info("CID00519", "Apple Inc")
    INSERT INTO Company_Info("CID21881", "Microsoft Corporation")
    INSERT INTO Company_Info("CID29897", "Alphabet Inc Class A")
    INSERT INTO Company_Info("CID20075", "Alibaba Group Holding Ltd")
    INSERT INTO Company_Info("CID68091", "Walmart Inc")
    INSERT INTO Company_Info("CID50107", "Visa Inc")

    INSERT INTO Security_offeredBy_Company("AAPL", "NYSE", "CID00519")
    INSERT INTO Security_offeredBy_Company("MSFT", "NSDQ", "CID21881")
    INSERT INTO Security_offeredBy_Company("GOOG", "NSDQ", "CID29897")
    INSERT INTO Security_offeredBy_Company("BABA", "SHSE", "CID20075")
    INSERT INTO Security_offeredBy_Company("WMT", "LDSE", "CID68091")
    INSERT INTO Security_offeredBy_Company("V", "FKSE", "CID50107")
        
    INSERT INTO Stock("AAPL", "NYSE", 341.7, 50, 70.5, 55.3, 5410221.7)
    INSERT INTO Stock("MSFT", "NSDQ", 460, 80, 120.8, 70.1, 6442134.9)
    INSERT INTO Stock("GOOG", "NSDQ", 1200.1, 250, 380.5, 130.5, 7600934.8)
    INSERT INTO Stock("BABA", "SHSE", 78.8, 88, 47.5, 46.3, 4599871.5)
    INSERT INTO Stock("WMT", "LDSE", 239.3, 77, 40.8, 52.3, 4981717.5)
    INSERT INTO Stock("V", "FKSE", 130.8, 90, 60.6, 57.9, 2998173)

    INSERT INTO Options("AAPL", "NYSE", "04/05/2025")
    INSERT INTO Options("MSFT", "NSDQ", "22/06/2026")
    INSERT INTO Options("GOOG", "NSDQ", "15/01/2023")
    INSERT INTO Options("BABA", "SHSE", "21/11/2025")
    INSERT INTO Options("WMT", "LDSE", "06/02/2027")
    INSERT INTO Options("V", "FKSE", "31/10/2025")

    INSERT INTO Makes("MID00001", "OID78489", "AAPL", "NYSE", "PID48776", "07/26/2022")
    INSERT INTO Makes("MID00433", "OID32301", "BABA", "SHSE", "PID81119", "06/11/2020")
    INSERT INTO Makes("MID98871", "OID81817", "MSFT", "NSDQ", "PID19054", "11/08/2021")
    INSERT INTO Makes("MID37610", "OID96987", "GOOG", "NSDQ", "PID22087", "02/01/2021")
    INSERT INTO Makes("MID59109", "OID41091", "WMT", "LDSE", "PID00411", "05/31/2022")
    INSERT INTO Makes("MID27184", "OID00012", "V", "FKSE", "PID00003", "01/28/2022")
    INSERT INTO Makes("MID98871", "OID00013", "V", "FKSE", "PID19054", "01/28/2022") -- new
    INSERT INTO Makes("MID98871", "OID00014", "V", "FKSE", "PID19054", "01/28/2022") -- new
    INSERT INTO Makes("MID98871", "OID00015", "GOOG", "NSDQ", "PID19054", "01/28/2022") -- new
    INSERT INTO Makes("MID98871", "OID00016", "GOOG", "NSDQ", "PID19054", "01/28/2022") -- new
    INSERT INTO Makes("MID98871", "OID00017", "GOOG", "NSDQ", "PID19054", "01/28/2022") -- new