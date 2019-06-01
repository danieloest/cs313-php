CREATE TABLE colors (
    colorID     serial     primary key,
    colorName       varchar(80)
);
INSERT INTO colors (colorname) VALUES ('White');

CREATE TABLE product (
    productID   serial     primary key,
    productName     varchar(80),
    mainPicture     text, -- the text is a url to the picture
    previewPicture  text, -- the text is a url to the picture
    sidePicture     text, -- the text is a url to the picture
    price           float,
    clothingSection int     references clothingSection(sectionID)
);
-- INSERT INTO clothing clothingSection, price, mainPicture, previewPicture, sidePicture, clothingname, size, productid, color) VALUES (1, 19.99, 'https://raw.githubusercontent.com/danieloest/cs313-php/master/web/The%20Worst/main.PNG', 'https://raw.githubusercontent.com/danieloest/cs313-php/master/web/The%20Worst/side.PNG', 'https://raw.githubusercontent.com/danieloest/cs313-php/master/web/The%20Worst/preview.JPG', 'The Worst Shirt', 1, 1, 1);
INSERT INTO product (productname, mainPicture, previewPicture, sidePicture, price, clothingSection) VALUES ('The Worst Shirt', 'https://raw.githubusercontent.com/danieloest/cs313-php/master/web/The%20Worst/main.PNG', 'https://raw.githubusercontent.com/danieloest/cs313-php/master/web/The%20Worst/preview.JPG', 'https://raw.githubusercontent.com/danieloest/cs313-php/master/web/The%20Worst/side.PNG', 19.99, 1);

CREATE TABLE size (
    sizeID   serial     primary key,
    sizeName     varchar(80)
);
INSERT INTO size (sizeName) VALUES ('Small');
INSERT INTO size (sizeName) VALUES ('Medium');
INSERT INTO size (sizeName) VALUES ('Large');

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
    size            int     references size(sizeID),
    productID       int     references product(productID),
    color           int     references colors(colorID)
);
INSERT INTO clothing(available, quantityOnHand, size, productid, color) VALUES (true, 5, 1, 1, 1);

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
DROP TABLE product;
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