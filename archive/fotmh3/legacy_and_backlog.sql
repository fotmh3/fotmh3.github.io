update current,backlog set current.runs=current.runs+1
where current.hasher=backlog.hasher and (backlog.1011='x' or  backlog.1011='h') ;
update current,backlog set current.hared=current.hared+1
where current.hasher=backlog.hasher and backlog.1011='h' ;

update current,backlog set current.runs=current.runs+1
where current.hasher=backlog.hasher and (backlog.999='x' or  backlog.999='h') ;
update current,backlog set current.hared=current.hared+1
where current.hasher=backlog.hasher and backlog.999='h' ;

update current,backlog set current.runs=current.runs+1
where current.hasher=backlog.hasher and (backlog.1001='x' or  backlog.1001='h') ;
update current,backlog set current.hared=current.hared+1
where current.hasher=backlog.hasher and backlog.1001='h' ;

update current,backlog set current.runs=current.runs+1
where current.hasher=backlog.hasher and (backlog.1012='x' or  backlog.1012='h') ;
update current,backlog set current.hared=current.hared+1
where current.hasher=backlog.hasher and backlog.1012='h' ;

update current,backlog set current.runs=current.runs+1
where current.hasher=backlog.hasher and (backlog.1013='x' or  backlog.1013='h') ;
update current,backlog set current.hared=current.hared+1
where current.hasher=backlog.hasher and backlog.1013='h' ;

update current,backlog set current.runs=current.runs+1
where current.hasher=backlog.hasher and (backlog.1014='x' or  backlog.1014='h') ;
update current,backlog set current.hared=current.hared+1
where current.hasher=backlog.hasher and backlog.1014='h' ;

update current,backlog set current.runs=current.runs+1
where current.hasher=backlog.hasher and (backlog.1015='x' or  backlog.1015='h') ;
update current,backlog set current.hared=current.hared+1
where current.hasher=backlog.hasher and backlog.1015='h' ;

update current,backlog set current.runs=current.runs+1
where current.hasher=backlog.hasher and (backlog.Ball='x' or  backlog.Ball='h') ;
update current,backlog set current.hared=current.hared+1
where current.hasher=backlog.hasher and backlog.Ball='h' ;

update current,backlog set current.runs=current.runs+1
where current.hasher=backlog.hasher and (backlog.Bike='x' or  backlog.Bike='h') ;
update current,backlog set current.hared=current.hared+1
where current.hasher=backlog.hasher and backlog.Bike='h' ;

update current,backlog set current.runs=current.runs+1
where current.hasher=backlog.hasher and (backlog.Tour='x' or  backlog.Tour='h') ;
update current,backlog set current.hared=current.hared+1
where current.hasher=backlog.hasher and backlog.Tour='h' ;




