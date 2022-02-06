import Container from 'react-bootstrap/Container';
import BGSTable from '../commons/BGSTable';
import { useState, useEffect } from 'react';
import BGSClient from '../../lib/BGSClient';

const headers = ['유저아이디', '유저이름', '비고'];

function Blacklist () {
  const [ data, setData] = useState([]);
    const updateData = () => {
    BGSClient.getBlackLists().then( res => {
      res.json().then( jsonRes => {
        setData(jsonRes);
      })
    })
  }
  useEffect(updateData, [])

  return (
    <Container>
      <BGSTable headers={headers} items={data}></BGSTable>
    </Container>
  )
}

export default Blacklist;