select * from cia;

select name, region, gdp from cia;

select name, region, area, population from cia;

select name, population / area as 'population per kvm2' from cia;

select name, population / 1000000 as 'population i milioner' from cia;


select * from cia where region = 'Europe';

select * from cia where population = 0;

select * from cia where population > 15000000;

select * from cia where region = 'Europe' and population > 15000000;

select * from cia where region = 'Europe' or region = 'Asia';


select * from cia where name like 'b%';

select * from cia where name like '__D%';

select * from cia where name like '____';

select * from cia where name like '%united%';

select * from cia where name like '%ia';


select * from cia order by name;

select * from cia order by region and order by name;

select * from cia where population > 100000000 order by population;

select * from cia order by region, area desc;


select count(name) from cia¨;

select count(name) from cia where region = 'Europe';

select count(population) from cia where region = 'Europe';

select count(name) from cia where region = 'asia';

select count(area) from cia where population = 0;

select max(population) from cia;


select region, sum(area) from cia group by region;

select region, avg(area) from cia group by region;

select region, max(population) from cia group by region;

select region, count(region) from cia group by region;


select region, sum(population) from cia group by region;

select region from cia where region like '%e%' group by region;

select sum(population) from cia where name like 'n%';

select sum(area) from cia where population > 10000000;

select name, population, area from cia where population > 1000000 and area > 10000;

select count(name) from cia where name like '_______';

select name from cia where population > area;