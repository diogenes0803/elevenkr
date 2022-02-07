import Container from 'react-bootstrap/Container';
import BGSTable from '../commons/BGSTable';
import { useState, useEffect } from 'react';
import { getOnlineUsers } from '../../lib/BGSClient';

const headers = ['유저이름', '유저아이디', '사용기기', 'ELO'];

function Online () {
  const [ data, setData] = useState([]);
  const makeLink = (context, id) => {
    return <a target='_blank' rel="noreferrer" href={`https://elevenvr.net/eleven/${id}`}>{context}</a>
  }
  
  const updateData = () => {
    const callAPIAndUpdate = () => {
      getOnlineUsers().then( res => {
        res.json().then( jsonRes => {
          jsonRes.forEach( (obj) => {
            obj.user_name = makeLink(obj.user_name, obj.user_id);
          })
          setData(jsonRes);
        })
      })
    }
    const interval = setInterval(callAPIAndUpdate, 5000);
    return () => {
      clearInterval(interval);
    }
  }
  useEffect(updateData, [])
  return (
    <Container>
      <BGSTable headers={headers} items={data}></BGSTable>
    </Container>
  )

}

export default Online;