CREATE TABLE colors (
    colorID     serial     primary key,
    colorName       varchar(80)
);

CREATE TABLE product (
    productID   serial     primary key,
    productName     varchar(80)
);
INSERT INTO product (productname) VALUES ('The Worst Shirt');

CREATE TABLE size (
    sizeID   serial     primary key,
    sizeName     varchar(80)
);

CREATE TABLE clothingSection (
    sectionID   serial     primary key,
    sectionName     varchar(80)
);

INSERT INTO clothingSection (sectionName) VALUES ('Shirts');
INSERT INTO clothingSection (sectionName) VALUES ('Pants');
INSERT INTO clothingSection (sectionName) VALUES ('Accessories');

CREATE TABLE clothing (
    clothingID      serial     primary key,
    available       BOOLEAN,
    quantityOnHand  int,
    clothingSection int     references clothingSection(sectionID),
    price           float,
    mainPicture     text, -- the text is a url to the picture
    previewPicture  text, -- the text is a url to the picture
    sidePicture     text, -- the text is a url to the picture
    clothingName            varchar(80),
    size            int     references size(sizeID),
    productID       int     references product(productID),
    color           int     references colors(colorID)
);
INSERT INTO clothing(available, quntityOnHand, clothingSection, price, mainPicture, previewPicture, sidePicture, clothingname, size, productid, color)

CREATE TABLE customer (
    customerID      serial     primary key,
    customerName    varchar(80),
    street          varchar(80),
    stateCode       varchar(2),
    zip             int
);

CREATE TABLE purchase (
    purchaseID      serial     primary key,
    customerID      int     references customer(customerID),
    shippingStreet  varchar(80),
    shippingState   varchar(80),
    shippingZip     int    
);

CREATE TABLE purchasedItems(
    purchasedItemsID serial    primary key,
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