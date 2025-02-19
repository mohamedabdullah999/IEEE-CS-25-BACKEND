# <span style = "color:red"> What a database and why does it exist ? </span>

In computing, a <span style = color:yellow>database</span>
is an organized collection of data or a type of data store based on the use of a **database management system** **_(DBMS)_**, the software that interacts with end users, applications, and the database itself to capture and analyze the data.
Computerized databases started in the 1960s, when the use of computers became a more cost-effective option for private organizations
<br> <br>
[<span style = "margin-left:250px"> link source </span>](https://en.wikipedia.org/wiki/Database#:~:text=In%20computing%2C%20a%20database%20is,capture%20and%20analyze%20the%20data.)

---

# <span style = "color:blue"> What is the SQL? </span>

- SQL stands for Structured Query Language
- SQL lets you access and manipulate databases
- SQL became a standard of the American National Standards Institute (ANSI) in <span style = "color:red">1986</span>, and of the International Organization for Standardization (ISO) in <span style = "color:red">1987</span>
  <br><br>

---

# <span style = "color:yellow"> What Can SQL do? </span>

- SQL can execute queries against a database
- SQL can retrieve data from a database
- SQL can insert records in a database
- SQL can update records in a database
- SQL can delete records from a database
- SQL can create new databases
- SQL can create new tables in a database
- SQL can create stored procedures in a database
- SQL can create views in a database
- SQL can set permissions on tables, procedures, and views
  <br> <br>
  [<span style = "margin-left:250px"> link source </span>](https://www.w3schools.com/sql/sql_intro.asp#gsc.tab=0)

---

# <span style = "color:pink"> What the history of MySQL? </span>

MySQL was created by a `Swedish company`, MySQL AB, founded by
Swedes David Axmark and Allan Larsson, along with Finnish Michael
"Monty" Widenius. Original development of MySQL by Widenius
and Axmark began in 1994.[23] The first version of MySQL appeared on
23 May 1995.
<br> <br>
[<span style = "margin-left:250px"> link source </span>](https://en.wikipedia.org/wiki/MySQL#:~:text=MySQL%20was%20created%20by%20a,appeared%20on%2023%20May%201995.)

---

# <span style= color:red> What are the most 5 famous DBs in the world now?and why? </span>

1. <span  style= color:brown>MYSQL </span>
   <br>
   **why?**

- Open-source and widely used in web applications (Facebook, Twitter, YouTube).
- Easy to use with strong community support.
- Works well with PHP and many CMS platforms (WordPress, Joomla).
- Reliable for small to medium-scale applications.

2. <span  style= color:blue>PostgreSQL </span>
   <br>
   **why?**

- Advanced open-source database with strong ACID compliance.
- Supports JSON, spatial data (PostGIS), and full-text search.
- Used by big companies like Apple, Spotify, and Reddit.
- Great for complex queries and high-performance applications.
  <br>

3. <span  style= color:pink>MongoDB (NoSQL) </span>
   <br>
   **Why?**

- A document-based NoSQL database, perfect for scalable and flexible applications.
- Used in modern apps that handle big data and real-time analytics.
- Preferred by companies like Adobe, eBay, and Lyft.
- Stores data in JSON-like documents instead of tables.
  <br>

4. <span  style= color:red>Microsoft SQL Server </span>
   <br>
   **why?**

- Developed by Microsoft, widely used in enterprise solutions.
- Strong security, analytics, and integration with Microsoft tools (Azure, Power BI).
- Used by banks, healthcare, and government agencies.
- Provides great performance and scalability for large business applications.
  <br>

5.  <span  style= color:yellow>Oracle Database </span>
    <br>
    **Why?**
    <br>

- One of the most powerful commercial relational databases.
- Used by large enterprises, banks, and telecom companies.
- High performance, security, and reliability.
- Supports multi-model data and cloud integration.
  <br>
  [<span style = "margin-left:250px"> link source </span>](https://www.bairesdev.com/blog/most-popular-databases/)
  <br> <br>

---

# What is the RDBMS ?

- A relational database management system (RDBMS) is a collection of programs and capabilities that enable IT teams and others to create, update, administer and otherwise interact with a relational database. A relational database is a type of database that stores related data points.

- RDBMSes store data in the form of tables, with most commercial relational database management systems using Structured Query Language (SQL) to access the database. However, since SQL was invented after the initial development of the relational model, it isn't necessary for RDBMS use.

- The RDBMS is the most popular database system among organizations. It provides a dependable method of storing and retrieving large amounts of data while offering a combination of system performance and ease of implementation. It's also the basis for modern database systems like MySQL.

[<span style = "margin-left:300px"> link source </span>](https://www.techtarget.com/searchdatamanagement/definition/RDBMS-relational-database-management-system)
<br> <br>

---

# <span style = "margin-left : 250px;color:yellow"> RDBMS vs DBMS </span>

## The main differences are: RDBMS stores data in the form of tables, whereas DBMS stores data in the form of files. Single users are supported by DBMS, whereas multiple users are supported by RDBMS. Client-server architecture is not supported by DBMS, although it is supported by RDBMS.

# <span style="margin-left : 250px;color:red"> Naming conventions </span>

A naming convention is a convention (generally agreed scheme) for naming things. Conventions differ in their intents, which may include to:

Allow useful information to be deduced from the names based on regularities. For instance, in Manhattan, streets are consecutively numbered; with east–west streets called "Streets" and north–south streets called "Avenues".
Show relationships, and in most personal naming conventions
Ensure that each name is unique for same scope

## [<span style = "margin-left:300px"> link source </span>](https://en.wikipedia.org/wiki/Naming_convention#:~:text=A%20naming%20convention%20is%20a,the%20names%20based%20on%20regularities.)

# Multi-version concurrency Control

Multiversion concurrency control (MCC or MVCC), is a non-locking concurrency control method commonly used by database management systems to provide concurrent access to the database and in programming languages to implement transactional memory.[1]

<hr>

# SQL Trigger

A trigger is a stored procedure in a database that automatically invokes whenever a special event in the database occurs. By using SQL triggers, developers can automate tasks, ensure data consistency, and keep accurate records of database activities. For example, a trigger can be invoked when a row is inserted into a specified table or when specific table columns are updated.

<hr>

# How can you take the backup of a database?

The BACKUP DATABASE statement is used in SQL Server to create a full back up of an existing SQL database.

BACKUP DATABASE databasename
TO DISK = 'filepath';

<hr>
