import Container from 'react-bootstrap/Container';
import BGSTable from '../commons/BGSTable';
import { useState, useEffect } from 'react';
import BGSClient from '../../lib/BGSClient';

const headers = ['유저이름', '유저아이디', '사용기기', 'ELO'];

function Online () {
  const [ data, setData] = useState([]);
  const callAPIAndUpdate = () => {
    BGSClient.getOnlineUsers().then( res => {
      res.json().then( jsonRes => {
        setData(jsonRes);
      })
    })
  }
  const updateData = () => {
    callAPIAndUpdate();
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