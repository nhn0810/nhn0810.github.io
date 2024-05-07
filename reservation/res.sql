create database res;
use res; 
create table users (
	id				int(11),
	name			char(32)  	character set utf8,
	childticket		int(3),
	adultticket 	int(3),
	childBIG3		int(3),
	adultBIG3		int(3),
	childfree		int(3),
	adultfree		int(3),
	childyear		int(3),
	adultyear		int(3),
	total			int(3)
);
describe users;