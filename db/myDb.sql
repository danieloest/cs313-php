CREATE TABLE colors (
    colorID     int     primary key,
    colorName       varchar(80)
);

CREATE TABLE product (
    productID   int     primary key,
    productName     varchar(80)
);

CREATE TABLE size (
    sizeID   int     primary key,
    sizeName     varchar(80)
);

CREATE TABLE clothingSection (
    sectionID   int     primary key,
    sectionName     varchar(80)
);

CREATE TABLE clothing (
    clothingID      int     primary key,
    available       BOOLEAN,
    quantityOnHand  int,
    clothingSection int     references clothingSection(sectionID),
    price           float,
    picture         text, -- the text is a url to the picture
    clothingName            varchar(80),
    size            int     references size(sizeID),
    productID       int     references product(productID),
    color           int     references colors(colorID)
);

CREATE TABLE customer (
    customerID      int     primary key,
    customerName    varchar(80),
    street          varchar(80),
    stateCode       varchar(2),
    zip             int
);

CREATE TABLE purchase (
    purchaseID      int     primary key,
    customerID      int     references customer(customerID),
    shippingStreet  varchar(80),
    shippingState   varchar(80),
    shippingZip     int    
);

CREATE TABLE purchasedItems(
    purchasedItemsID int    primary key,
    purchaseID       int    references purchase(purchaseID),
    productID        int    references product(productID)
);

-- DROP TABLE colors;
-- DROP TABLE product;
-- DROP TABLE size;
-- DROP TABLE clothingSection;
-- DROP TABLE clothing;
-- DROP TABLE customer;
-- DROP TABLE purchase;
-- DROP TABLE purchasedItems;

-- select * from colors;
-- select * from product;
-- select * from size;
-- select * from clothingSection;
-- select * from clothing;
-- select * from customer;
-- select * from purchase;
-- select * from purchasedItems;