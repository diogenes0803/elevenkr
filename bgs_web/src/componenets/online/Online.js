import Container from 'react-bootstrap/Container';
import BGSTable from '../commons/BGSTable';
import { useState } from 'react';
import BGSClient from '../../lib/BGSClient';

const headers = ['유저이름', '유저아이디', '사용기기', 'ELO'];

function Online () {
  const [ data, setData] = useState(BGSClient.getOnlineUsers());
  return (
    <Container>
      <BGSTable headers={headers} items={data}></BGSTable>
    </Container>
  )

}

export default Online;