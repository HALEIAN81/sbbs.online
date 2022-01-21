alter table add_domains
drop column created_at,
drop column updated_at;INSERT INTO add_domains (id, name, domain_name, price)
VALUES (
    'id:bigint',
    'name:varchar',
    'domain_name:char',
    price:int
  );
