 -- .............. start brands............


create table brands (
  
    brand_id int not null auto_increment ,
    brandName varchar(20)  not null UNIQUE,
    brand_descriptions varchar(400) not null,



    primary key (brand_id,brandName) 
) ;


 -- .............. end brands............



 -- .............. start bike categories ............

create table bikeCategory (
  
    bikeCategory_id int not null auto_increment ,
    categoryName varchar(20)  not null UNIQUE,
    bikeCategory_descriptions varchar(400) not null,



    primary key (bikeCategory_id,categoryName) 
) ;

-- .............. end  bike categories ............



--  .................  start  product   ....................
 
 
  create table product (
   product_id int not null auto_increment ,
   Category varchar(30) not null ,
    brandName varchar(20) not null   , -- int not null
    title varchar(200) not null ,


     color1 varchar(30)  not null ,
      color2 varchar(30)  ,
      price float(5,5) ,
      discount float(3,3) DEFAULT 0 ,
      points  int not null DEFAULT 0,
      descriptions varchar(400) not null ,
      made varchar(30) not null ,
      code varchar(40) not null ,
      gender varchar(30) not null ,
      material varchar(170) not null ,
      model  int not null , 
      weightt float(4,4) default 0, 

         categoryName varchar(20) not null   , -- for the bikes  ,  varchar(50) not null default'none' 
     activity varchar(40) not null default 'none' , -- for the bikes 
      chain varchar(60) not null  default 'none', -- for the bikes 
    sys varchar(50) not null default 'none', -- for the bikes 



     Pdate DATE DEFAULT CURRENT_DATE ,
     primary key (product_id)
) ;



alter table product
    add constraint foreignBrand
    foreign key (brandName) 
    references brands (brandName) ON DELETE CASCADE,

    add constraint foreignBikeCat
    foreign key (categoryName) 
    references bikeCategory (categoryName) ON DELETE CASCADE ;

-- ........................end  product ...........................................

-- ........................start  sizeStock ...........................................

CREATE TABLE sizeStock ( 
    product_id int not null , 
    size varchar(10)  not null ,  
    quantity int DEFAULT 0 ,

primary key (product_id,size) 
);
alter table sizeStock
    add constraint foreignSizeStock
    foreign key (product_id) 
    references product (product_id) ON DELETE CASCADE;

-- ........................end  sizeStock ...........................................


 


-- .......................... starts usres taable ,,,,,,,,,,,,,,,,,,,,,,,,  

CREATE TABLE users (
    userId int auto_increment primary key ,
     layer int default 0 not null , --  user=0 , Super_Admin=1 ,Admin=2 ,  Sales_man=3, Delivery_man=4 ,
     gender varchar(20) not null  , 
      firstName varchar(50) not null , 
      lastName varchar(50) not null  ,
       email varchar(50) not null UNIQUE ,
       tel varchar(50) not null ,
       addressU varchar(100) not null  ,
       codePostal varchar(30) not null  , 
        passwordU varchar(50) not null ,
        userPoint int  DEFAULT 0,
         
         dateUser date default curdate()) ;



-- .......................... end  usres taable ,,,,,,,,,,,,,,,,,,,,,,,, 


-- ........................start rating   ...........................................

CREATE TABLE rating ( 
    rating_id int not null,
    userId int not null , 
    product_id int not null  ,
    rating int ,
    comment varchar(200) ,
    rating_date DATE DEFAULT CURRENT_DATE,
     
primary key (rating_id,userId,product_id) 
);

alter table rating 
    add constraint foreignUserrating
    foreign key (userId) 
    references users (userId) ON DELETE CASCADE,

    add constraint foreignProductrating
    foreign key (product_id) 
    references product (product_id) ON DELETE CASCADE ;


-- .......................... end  rating  taable ,,,,,,,,,,,,,,,,,,,,,,,, 



-- .......................... starts favorite taable ,,,,,,,,,,,,,,,,,,,,,,,,  

CREATE TABLE fav ( 
    userId int not null , 
    product_id int not null  ,
    favDate DATE DEFAULT CURRENT_DATE,
     
primary key (userId,product_id) 
);

alter table fav
    add constraint foreignUserFav
    foreign key (userId) 
    references users (userId) ON DELETE CASCADE,

    add constraint foreignProductFav
    foreign key (product_id) 
    references product (product_id) ON DELETE CASCADE ;




-- .......................... end  fav taable ,,,,,,,,,,,,,,,,,,,,,,,, 


-- .......................... stART  cart taable ,,,,,,,,,,,,,,,,,,,,,,,, 

-- CREATE TABLE cart ( 
--     userId int not null , 
--     product_id int not null  ,
   
--     product_size varchar(10)  not null ,
--      cart_quantity int not null  DEFAULT 0 ,



    
--      cart_date date default curdate(),
     
-- primary key (userId,product_id,product_size) 
-- );


CREATE TABLE `cart` (
  `userId` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_size` varchar(10) NOT NULL,
  `cart_quantity` int(11) NOT NULL DEFAULT 0,
  `cart_date` date DEFAULT curdate() ,
  primary key (userId,product_id,product_size) 
) ;




   


alter table cart 
    add constraint foreignUsercart
    foreign key (userId) 
    references users (userId) ON DELETE CASCADE,
    

    add constraint foreignProductcart
    foreign key (product_id) 
    references product (product_id) ON DELETE CASCADE ,

      add constraint foreignsize
    foreign key (product_size) 
    references sizeStock (size) ON DELETE CASCADE;


    
    -- add constraint foreignProductSizecart
    -- foreign key (product_size) 
    -- references sizeStock (size) ON DELETE CASCADE ; 

    -- .......................... end  cart taable ,,,,,,,,,,,,,,,,,,,,,,,, 


    -- .......................... stART  ordre addshippingAddress  taable ,,,,,,,,,,,,,,,,,,,,,,,, !!!!

CREATE TABLE ordreAddress ( 
    ordre_id int not null auto_increment ,

    userId int not null , 
    email varchar(30)  not null ,
    tel varchar(30)  not null ,
    company varchar(30)   ,
      firstName varchar(50) not null , 
      lastName varchar(50) not null  ,
      stret varchar(50) not null  ,
      addressO varchar(50) not null  ,
       codePostal varchar(30) not null  , 
       contry varchar(30) not null  , 

       OrderDone int  DEFAULT 0,

    
   
   
    
     ordre_date date default curdate(),
     
primary key (ordre_id) 

);

alter table ordreAddress 
    add constraint foreignUserOrdres
    foreign key (userId) 
    references users (userId) ON DELETE CASCADE
     ;

 

    -- .......................... end  ordre shippingAddress taable ,,,,,,,,,,,,,,,,,,,,,,,,

    -- .......................... stART  Salesordre   taable ,,,,,,,,,,,,,,,,,,,,,,,, !!!!
    --after  payment .........

CREATE TABLE salesOrdre (   
    salesOrdre_id int not null auto_increment ,
     ordre_id int not null  ,
      userId int not null , 
    product_id int not null  ,
    product_size varchar(10)  not null ,
     Ordre_quantity int not null  DEFAULT 0 ,
         price_now float(5,5),
      discount_now float(3,3) DEFAULT 0 ,
     sales_date date default curdate(),

     

     
     primary key (salesOrdre_id) 

);

alter table salesOrdre 
    add constraint foreignUserSales
    foreign key (userId) 
    references users (userId) ON DELETE CASCADE ,

    add constraint foreignOrdreProduct
    foreign key (product_id) 
    references product (product_id) ON DELETE CASCADE ,

    add constraint foreignOrdreAddress
    foreign key (ordre_id) 
    references ordreAddress (ordre_id) ON DELETE CASCADE 

       
     ;

    -- .......................... end  Salesordre taable ,,,,,,,,,,,,,,,,,,,,,,,,