<?php require "../connection/connection.php" ?>

<?php


$table="j";
switch($table)
{
	case "a": $sql="CREATE TABLE nurse(
                    nid VARCHAR(15) not null PRIMARY KEY,
                    nname VARCHAR(25),
                    nsex VARCHAR(25),
                    nsalary INT(10),
                    nphno INT(10),
                    nhsname VARCHAR(25),
                    ncity VARCHAR(25))";
					break;
					
	case "b": $sql="create table room(
                  roomno varchar(15) not null primary key,
                  roomtype varchar(10),
				  nid varchar(15), 
				  foreign key (nid) references nurse(nid),
				  foreign key (roomtype) references roomspecial(roomtype)
                  )";				
				  break;
				  
				  
	case "c": $sql="create table roomspecial(
                  roomtype varchar(10) primary key,
                  rent int(10),
                  check(roomtype in ('AC','NON AC'))
                  )";				
				  break;
				  
	case "d": $sql="create table patient(
                    pid VARCHAR(15) not null PRIMARY KEY,
                    pname VARCHAR(25),
                    psex VARCHAR(25),
                    psalary INT(10),
                    pphno INT(10),
                    phsname VARCHAR(25),
                    pcity VARCHAR(25))";                  			
				  break;			  
	
	case "e": $sql="create table patientadmission(
                        pid varchar(15) not null,
                        doa varchar(25),
                        dov date,
                        period integer,
                        roomno varchar(15) unique, 
						primary key(pid,doa),
						foreign key (roomno) references room(roomno),
						foreign key (pid) references patient(pid)
                        )";			
				  break;
				  
	case "f": $sql="create table medicine(
                      code varchar(15) not null primary key,
                      name varchar(25),
                      price integer
                      )";
					  break;
					  
	case "g": $sql="create table bill(
                  bid varchar(15) not null primary key,
				  pid varchar(15),
                  code varchar(15),
                  quantity integer,
				  foreign key (pid) references patient(pid),
				  foreign key (code) references medicine(code)
				  )";
				  break;
				  
				  
	case "h": $sql="create table doctor(
                      did varchar(15) not null primary key,
                      dname varchar(25),
                      dtype varchar(25),
                      psex varchar(10),
                      dsalary integer,
                      dphno integer,
                      dhsname varchar(25),
                      dcity varchar(25)
                      )";
					  break;
					  
	case "i":$sql="create table receptionist(
                    rid varchar(15) not null primary key,
                    rname varchar(25),
                    rsex varchar(10),
                    rsalary integer,
                    rphno integer,
                    rhsname varchar(25),
                    rcity varchar(25)
                    )";
					break;
					
	case "j":$sql="create table record(
                    appointment integer not null unique  auto_increment,
					date varchar(25),
                    pid varchar(15),
                    description varchar(50),
                    did varchar(15),
					rid varchar(15), 
					primary key(date,pid),
					foreign key (did) references doctor(did),
					foreign key (pid) references patient(pid),
					foreign key (rid) references receptionist(rid)
                    )";
					break;
	
					  
						  
	
	default:echo"no table created";
}

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

?>